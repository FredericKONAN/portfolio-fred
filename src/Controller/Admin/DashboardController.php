<?php

namespace App\Controller\Admin;

use App\Entity\Experiences;
use App\Entity\Presentation;
use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Fredmoye');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard',  'fa fa-home') ;
         yield MenuItem::linkToCrud('Projets', 'fa fa-desktop', Project::class);
         yield MenuItem::linkToCrud('Expériences', 'fas fa-edit', Experiences::class);
         yield MenuItem::linkToCrud('Presentation', 'fas fa-list', Presentation::class);
    }
}
