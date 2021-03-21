<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Entity\Odre;
use App\Entity\Carte;


class UserController extends AbstractController
{
    
       /**
* @Route("/", name="index")
*/
    public function index(): Response
    {
        return $this->render('user/index.html.twig');
    }
    /**
* @Route("/user/add", name="user_add")
*/
public function addForm(Request $request,EntityManagerInterface $entityManager):Response

{

$form = $this->createFormBuilder()
->add('Name', TextType::class)
->add('Email', EmailType::class)
->add('Password', PasswordType::class)
->add('Phone', TelType::class)
->add('Save', SubmitType::class, ['label' => 'Sign Up'])
->getForm();

// pour r´ecup´erer les variables de la requete POST
$form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) {
    $data = $form->getData();
    $user = new User();
    $user->setName($data['Name']);
    $user->setEmail($data['Email']);
    $user->setPassword($data['Password']);
    $user->setPhone($data['Phone']);
    $user->setRole('Client');
    $user->setPoint(0);
    $entityManager->persist($user);
    $entityManager->flush();

    return $this->redirectToRoute('verify_number');
}

return $this->render('pages/inscription.html.twig', [
'controller_name'=> 'UserController',
'form' => $form->createView(),
]);
}
<<<<<<< HEAD:src/Controller/UserController.php
       /**
* @Route("/verifyNumber", name="verify_number")
*/
public function verifyNum(): Response
{
    return $this->render('pages/verifyNumber.html.twig');
}
}
=======

}
>>>>>>> fd7da7e8723aa5deb29dd695742704a7754b852e:src/Controller/userController.php
