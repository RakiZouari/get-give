<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursType;



use App\Repository\CoursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;

class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours')]
    public function index(): Response
    {
        return $this->render('cours/index.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    #[Route('/ajoutCours', name: 'ajoutCours')]
    public function addcours(ManagerRegistry $doctrine,Request $request){
        $cours= new Cours();
        $form=$this->createForm(CoursType::class,$cours);
        $form->handleRequest($request);
        //Action d'ajout
        if($form->isSubmitted()&& $form->isValid()){
            $em =$doctrine->getManager() ;
            $em->persist($cours);
            $em->flush();
            $this->addFlash(
                'info',
                'Added Successfully'
            );
            return $this->redirectToRoute("listCours");}
        return $this->renderForm("cours/ajoutCours.html.twig",
            array("f"=>$form));
    }



    #[Route('/listCours', name: 'listCours')]
    public function afficheCours(): Response
    {
        $c = $this->getDoctrine()
            ->getRepository(Cours::class)->findAll();
        return $this->render('cours/listCours.html.twig', [
            'cours' => $c,
        ]);
    }

        #[Route('/modifierCours/{id}', name: 'modifierCours')]
        public function modifierCours(ManagerRegistry $doctrine, Request $request,$id,CoursRepository $repository ){
            //récupérer cours à modifier
            $cours= $repository->find($id);
            $form=$this->createForm(CoursType::class,$cours);
            $form->handleRequest($request);
            //Action de MAJ
            if($form->isSubmitted()&& $form->isValid()){
                $em =$doctrine->getManager() ;
                $em->flush();
                $this->addFlash(
                    'info',
                    'modifier avec succes '
                );
                return $this->redirectToRoute("listCours");}
            return $this->renderForm("cours/modifierCours.html.twig",
                array("f"=>$form));
        }
        #[Route('/suppCours/{id}', name: 'supprimerCours')]

        public function suppE(ManagerRegistry $doctrine,$id,CoursRepository $repository)
        {
            //récupérer le classroom à supprimer
            $cours= $repository->find($id);
            //récupérer l'entity manager
            $em= $doctrine->getManager();
            $em->remove($cours);
            $em->flush();
            return $this->redirectToRoute("listCours");
        }

}
