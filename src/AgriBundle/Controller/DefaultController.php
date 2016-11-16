<?php

namespace AgriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        return $this->render('AgriBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tutoriel", name="tutoriel")
     */
    public function tutorielAction()
    {
        return $this->render('AgriBundle:Default:tutoriel.html.twig');
    }

    /**
     * @Route("/article", name="article")
     */
    public function articlelAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AgriBundle:Article')->findAll();

        return $this->render('AgriBundle:Default:article.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * @Route("/compte", name="compte")
     */
    public function moncomptelAction()
    {
        return $this->render('AgriBundle:Default:compte.html.twig');
    }
}
