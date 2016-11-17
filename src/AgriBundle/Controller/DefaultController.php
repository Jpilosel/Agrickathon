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
     * @Route("/article/detail/{id}", name="article_detail")
     */
    public function articleDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AgriBundle:Article')->findOneById($id);
        return $this->render('AgriBundle:Default:article_detail.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * @Route("/agri-rangers", name="agri-rangers")
     */
    public function moncomptelAction()
    {
        return $this->render('AgriBundle:Default:compte.html.twig');
    }
}
