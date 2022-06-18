<?php

namespace App\Controller;

use App\Entity\Experiences;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $produts =  $this->em->getRepository(Experiences::class)->findAll();

        return $this->render('home/index.html.twig', [
            'experiences' => $produts,
        ]);
    }
}
