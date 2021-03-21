<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Ordre;
use App\Entity\Carte;


class AdminController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/dashboard" ,name="app_dashboard")
     */
    public function dashboard()
    {
        return $this->render('dashboard.html.twig', []);

    }

    /**
     * @return Response
     * @throws \Exception
     * @Route("/userProfile" ,name="app_userProfile")
     */

    public function userProfile()
    {
        return $this->render('Default/userProfile.html.twig', []);

    }

    /**
     * @return Response
     * @throws \Exception
     * @Route("/tableList" ,name="app_tableList")
     */
    public function tableList()
    {
        return $this->render('Default/tableList.html.twig', []);

    }

    /**
     * @return Response
     * @throws \Exception
     * @Route("/typography",name="app_typography")
     */
    public function typography()
    {
        return $this->render('Default/typography.html.twig', []);

    }

    /**
     * @return Response
     * @throws \Exception
     * @Route("/icons" ,name="app_icons")
     */
    public function icons()
    {
        return $this->render('Default/icons.html.twig', []);

    }

    /**
     * @return Response
     * @throws \Exception
     * @Route("/home",name="app_home")
     */
    public function home()
    {

        return $this->render('Home.html.twig', []);

    }

    /**
     * @return Response
     * @throws \Exception
     * @Route("/notifications",name="app_notifications")
     */
    public function notifications()
    {
        return $this->render('Default/notifications.html.twig', []);

    }


}