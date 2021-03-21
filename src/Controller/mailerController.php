<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Ordre;
use App\Entity\Carte;


class mailerController extends AbstractController
{
    /**
* @Route("/mail", name="mail")
*/

    public function index(Request $request,\Swift_Mailer $mailer)
{
    try{
        $message = (new \Swift_Message('Hello Email')) 
        ->setFrom('atest6882@gmail.com')
        ->setTo('abirbourguiba.1998@gmail.com')
        ->setSubject("teststsss")
        ->setBody("trrrrrr",
         'text/plain'
     );
     $mailer->send($message);
//    dd($mailer);
return $this->render('pages/new.html.twig');
    }catch(Exception $e){
        dd($e);
    }
              
    
}
    
}