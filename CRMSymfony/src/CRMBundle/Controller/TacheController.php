<?php

namespace CRMBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CRMBundle\Entity\Tache;
use CRMBundle\Form\TacheType;
use Symfony\Component\HttpFoundation\Response;
class TacheController extends Controller
{
    /**
     * @Route("/ajoutTache", name="insertTache")
     */
    public function AddAction(Request $request)
    {
        $tache= new Tache();
        // replace this example code with whatever you need
        // on récupere me formulaire
        $form=$this->createForm(TacheType::class,$tache);
        // on génére le html du form
        $form->handleRequest($request);

        //si le formulaire a été soumis
        if($form->isSubmitted()){

            //on enregitre l'utilisateur dans la bdd

            $em=$this->getDoctrine()->getManager();
            $em->persist($tache);
            $em->flush();
            return new Response("L'utilisateur a été ajouter avec succés" );
        }

        $formView=$form->createView();
        return $this->render('ajoutTache.html.twig',array('form'=>$formView));
    }
    /**
     * @Route("/changerSatutTache/{idTache}", name="insertTache")
     */
    public function changerStatut($idTache)
    {
        if(!empty($idTache) ){
            $tache= new Tache();
            $em = $this->getDoctrine()->getManager();
            $tache = $em->getRepository(Tache::class)->find($idTache);

            if (!$tache) {
                throw $this->createNotFoundException(
                    'No tache found for id '.$tache
                );
            }
            if( $tache->getFait()==true)
                $tache->setFait(false);
            else
            {
                $tache->setFait(true);
            }
            $em->flush();
            //return new Response("Le Statut de la tache à été modifier avec succés" );
            return $this->redirect("/home");
        }
        else{
            return new Response("Le Statut de la tache n'a pas été modifier" );
            }



    }
}
