<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArgoFormuType;
use App\Entity\Argonaute;

class Controller extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index(): Response
    {
        $NouvelArgo = new Argonaute();
        $formu = $this->createForm(Argonaute::class, $NouvelArgo);
        return $this->render('/index.html.twig', [
            'controller_name' => 'Controller',
            'formulaire'=>$formu,
        ]);
        
    }
}
