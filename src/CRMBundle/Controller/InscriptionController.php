<?php

namespace CRMBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CRMBundle\Entity\Utilisateur;
use CRMBundle\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Response;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function IndexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('/inscription/formInscription.html.twig');
    }
    /**
     * @Route("/insertUtilisateur", name="insertUtilisateur")
     */
    public function AddAction(Request $request)
    {
        $utilisateur= new Utilisateur();
        // replace this example code with whatever you need
        // on récupere me formulaire
        $form=$this->createForm(UtilisateurType::class,$utilisateur);
        // on génére le html du form
        $form->handleRequest($request);

        //si le formulaire a été soumis
        if($form->isSubmitted()){

            //on enregitre l'utilisateur dans la bdd

            $em=$this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();
            return new Response("L'utilisateur a été ajouter avec succés" );
        }

        $formView=$form->createView();
        return $this->render('baseInscription.html.twig',array('form'=>$formView));
    }

}