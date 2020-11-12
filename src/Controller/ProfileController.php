<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="user_profile")
     */
    public function home()
    {

        return $this->render('pages/profile.html.twig');

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );
    }
}

?>