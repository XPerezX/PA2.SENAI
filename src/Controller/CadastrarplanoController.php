<?php

namespace App\Controller;

use App\Entity\Planos;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CadastrarplanoController extends AbstractController
{
    /**
     * @Route("/cadastrarplano", name="cadastrarplano")
     */
    public function cadastroplano(Request $request) : Response
    {
        $planos= new Planos();
        //dump($request);
        $form = $this->createFormBuilder($planos)
            ->add('planome', TextType::class, ['label' => 'Nome do Plano']) //A Label precisa ser igual a variavel criada no DB no caso planome
            ->add('confirme', SubmitType::class, ['label' => 'Cadastrar Plano'])
            ->getForm();
        $form->handleRequest($request);

        //dump($form->get('planome')->setData(321));

        if ($form->isSubmitted() && $form->isValid())
        {
          
            $planos = $form->getData();
           
            $entityManager = $this->getDoctrine()->getManager(); //G.P - Linhas que adicionei para adicionar oq foi cadastrado no BD
          //  $entityManager->persist($planos);
           // $entityManager->flush();
            dump($planos->getPlanome());
        }

        return $this->render('cadastrarplano/cadastrarplano.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
