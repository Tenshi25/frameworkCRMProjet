<?php

namespace CRMBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('/inscription/formInscription.html.twig');
    }

}