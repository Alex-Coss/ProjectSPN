<?php

namespace App\Controller;

use App\Repository\SeriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Route prefix for all Controller routes
 * @Route("/front/main", name="front_main_")
 */
class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function browse(SeriesRepository $seriesRepository): Response
    {
        return $this->render('front/main/index.html.twig', ['controller_name' => 'MainController']);
    }
}
