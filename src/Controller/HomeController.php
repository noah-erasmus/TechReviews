<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_homepage")
     */
    public function home()
    {

        return $this->render('pages/home.html.twig');

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );
    }
}

?>