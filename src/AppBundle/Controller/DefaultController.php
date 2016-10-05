<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Utilisateur;
use AppBundle\Form\UtilisateurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction() {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ));
    }



    /**
     * @Route("page/{num}", name="page")
     */
    public function pageAction(Request $r, $num) {

    if ($r->getMethod() == 'GET') {
        if ($num < 3 && $num > 0) {
            return $this->render('default/page' . $num . '.html.twig');
        }
        
    }
    //the number of actually page
    return $this->render('default/index.html.twig');
    }
    
    /**
    * @Route("/news", name="addNews")
    */
    public function ajoutNews() {

    
      
            return $this->render('default/addNews.html' . $num . '.html.twig');
        
        
    
    }
    
    
    /**
     * @Route("/addUser")
     */
    public function addUser(){
        return new Response("vide") ;
               
    }

    
    /**
     * @Route("/ajout/news", name="ajoutNews")
     */
    public function getAjoutNews(){
        return $this->render("default/addNews.html.twig") ;
    }
    
    /**
     * @Route("/ajout/user", name="ajoutUser")
     */
    public function getAjoutUser(){
        return $this->render("default/addUser.html.twig", array(
            "formulaire"=> $this->createForm(UtilisateurType::class, new Utilisateur())->createView()
         )) ;
    }
  }


