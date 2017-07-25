<?php

namespace AST\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; //Afin d'utiliser l'objet Response
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; //afin d'utilser urlgeneratorinterface
use AST\PlatformBundle\Entity\utilisateurs;
use AST\PlatformBundle\Form\utilisateursType;
use AST\PlatformBundle\Form\connexionType;
use Symfony\Component\HttpFoundation\Request;

class AnimestudioController extends Controller
{
    public function accueilAction()
    {
    	


    	return $this->render('ASTPlatformBundle:Animestudio:accueil.html.twig');

    }

    public function inscriptionAction(Request $request)
    {
        

        $Utilisateurs = new Utilisateurs();
        $form = $this->createForm(utilisateursType::class,$Utilisateurs);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($Utilisateurs);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice','Utilisateur bien enregistré');

            return $this->redirectToRoute('Ast_Platform_Accueil');
        }

        return $this->render('ASTPlatformBundle:Animestudio:inscriptionAction.html.twig',
                    array('form'=>$form->createView(),));

    }

    public function connexionAction(Request $request)
    {
        

        $Utilisateurs = new Utilisateurs();
        $form = $this->createForm(connexionType ::class,$Utilisateurs);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){

            return $this->redirectToRoute('Ast_Platform_Accueil');
        }

        return $this->render('ASTPlatformBundle:Animestudio:connexion.html.twig',
                    array('form'=>$form->createView(),));

    }
}
