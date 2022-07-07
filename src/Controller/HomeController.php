<?php

namespace App\Controller;

use App\Entity\Experiences;
use App\Entity\Presentation;
use App\Entity\Project;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        $experiences =  $this->em->getRepository(Experiences::class)->findAll();
        $projets     =  $this->em->getRepository(Project::class)->findAll();
        $presentations     =  $this->em->getRepository(Presentation::class)->findAll();

        return $this->render('home/index.html.twig', [
            'experiences' => $experiences,
            'projets' => $projets,
            'presentations' => $presentations,
        ]);
    }

    /**
     * @Route("/nous-contacter", name="app_contact")
     */
    public function contact(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form);
            $this->addFlash('notice', 'Merci de nous avoir contacté. Notre équipe va vous répondre dans les meilleurs délais.');
        }
        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
