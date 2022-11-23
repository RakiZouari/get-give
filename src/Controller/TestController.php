<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\TestType;
use App\Repository\TestRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/quizz', name: 'app_quizz')]
    public function quizData(): Response
    {
        return $this->render('test/quiz.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/ajoutTest', name: 'ajoutTest')]
    public function addstudent(ManagerRegistry $doctrine,Request $request){
        $test= new Test();
        $form=$this->createForm(TestType::class,$test);
        $form->handleRequest($request);
        //Action d'ajout
        if($form->isSubmitted()&& $form->isValid()){
            $em =$doctrine->getManager() ;
            $em->persist($test);
            $em->flush();
            $this->addFlash(
                'info',
                'Added Successfully'
            );
            return $this->redirectToRoute("listTest");}
        return $this->renderForm("test/ajoutTest.html.twig",
            array("f"=>$form));
    }

    #[Route('/listTest', name: 'listTest')]
    public function afficheTest(): Response
    {
        $c = $this->getDoctrine()
            ->getRepository(Test::class)->findAll();
        return $this->render('test/listTest.html.twig', [
            'test' => $c,
        ]);
    }

    #[Route('/modifierTest/{id}', name: 'modifierTest')]
    public function modifierTest(ManagerRegistry $doctrine,
                                  Request $request,$id,TestRepository $repository ){
        //récupérer test à modifier
        $test= $repository->find($id);
        $form=$this->createForm(TestType::class,$test);
        $form->handleRequest($request);
        //Action de MAJ
        if($form->isSubmitted()&& $form->isValid()){
            $em =$doctrine->getManager() ;
            $em->flush();
            $this->addFlash(
                'info',
                'Added Successfully'
            );
            return $this->redirectToRoute("listTest");}
        return $this->renderForm("test/modifierTest.html.twig",
            array("f"=>$form));
    }
    #[Route('/suppTest/{id}', name: 'supprimerTest')]

    public function suppE(ManagerRegistry $doctrine,$id,TestRepository $repository)
    {
        //récupérer le classroom à supprimer
        $test= $repository->find($id);
        //récupérer l'entity manager
        $em= $doctrine->getManager();
        $em->remove($test);
        $em->flush();
        return $this->redirectToRoute("listTest");
    }
}
