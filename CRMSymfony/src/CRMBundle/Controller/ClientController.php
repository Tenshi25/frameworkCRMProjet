<?php

namespace CRMBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CRMBundle\Entity\Client;
class ClientController extends Controller
{
    /**
     * @Route("/ficheClient", name="afficheClient")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        // recupére un objet grâce a son id
        $client = new Client();
        $client= $this->getDoctrine()->getRepository('CRMBundle:Client')->find($_POST["idClient"]);
        return $this->render('AfficheClient.html.twig',array('Client'=>$client));
    }
}
