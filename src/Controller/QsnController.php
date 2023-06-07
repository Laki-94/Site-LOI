<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QsnController extends AbstractController
{
    #[Route('/q/s/n', name: 'app_qsn')]
    public function index(): Response
    {
        return $this->render('qsn/index.html.twig', [
            'controller_name' => 'QSNController',
        ]);
    }
}
