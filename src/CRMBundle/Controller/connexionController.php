<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 11/01/2018
 * Time: 13:45
 */

namespace CRMBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConnexionController extends Controller
{


    /**
     * @Route("/index", name="premierCo")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('/connexion/formConnexion.html.twig');
    }
    /**
     * @Route("/connexion", name="Connexion")
     */
    public function connexionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('/connexion/formConnexion.html.twig');
    }


}