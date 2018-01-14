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
use CRMBundle\Entity\Utilisateur;
use CRMBundle\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Response;

class ConnexionController extends Controller
{


    /**
     * @Route("/home", name="home")
     */
    public function indexAction(Request $request)
    {
        if (empty($_SESSION)){
            $utilisateur = new utilisateur();
        // on récupere le formulaire
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        // on génére le html du form
        $form->handleRequest($request);

        // recupre le login saisi par l'utilisateur
        //dump($form->get("login")->getData());

        //si le formulaire a été soumis
        if ($form->isSubmitted()) {
            //findOneBy(array("login",$form->get("login"))

            // recupére un objet grâce a son id
            //$utilisateur= $this->getDoctrine()->getRepository('CRMBundle:Utilisateur')->find($id);

            $utilisateur = $this->getDoctrine()->getRepository('CRMBundle:Utilisateur')->findOneBylogin($form->get("login")->getData());
            if ($utilisateur->getLogin() == $form->get("login")->getData() && $utilisateur->getMdp() == $form->get("mdp")->getData()) {
                //session_start();
                $_SESSION["utilisateur"] = $utilisateur;
                var_dump("utilisateur connecter : ", $_SESSION["utilisateur"]);
                return new Response("C'est bon vous êtez connécté");
            }
            var_dump($utilisateur);
            //on enregitre l'utilisateur dans la bdd
            $em = $this->getDoctrine()->getManager();

            return new Response("L'utilisateur a rempli le formulaire");

        }

        $formView = $form->createView();
        return $this->render('formBaseConnexion.html.twig', array('form' => $formView));
    }
        return new Response("Vous êtes Connecté");
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