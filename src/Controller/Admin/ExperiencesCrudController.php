<?php

namespace App\Controller\Admin;

use App\Entity\Experiences;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ExperiencesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Experiences::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre', 'Titre'),
            TextareaField::new('debutExp', 'Date debut'),
            TextField::new('finExp', 'Date de fin'),
            TextareaField::new('description', 'Description'),
            ImageField::new('icone', 'Icone')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }

}
