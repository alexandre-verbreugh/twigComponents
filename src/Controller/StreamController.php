<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StreamController extends AbstractController
{
    #[Route('/stream', name: 'app_stream')]
    public function index(): Response
    {
        return $this->render('stream/index.html.twig');
    }
}
