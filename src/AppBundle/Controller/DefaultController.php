<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $LesAnnonces = $this->getDoctrine()->getManager()->getRepository('AppBundle:Annonce');
        $LesAnnonces = $LesAnnonces->findAll();
        return $this->render('Index/index.html.twig',
            array(
                'LesAnnonces' => $LesAnnonces,
            )
        );
    }
}
