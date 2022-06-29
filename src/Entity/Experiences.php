<?php

namespace App\Entity;

use App\Repository\ExperiencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperiencesRepository::class)
 */
class Experiences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $debutExp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $finExp;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable="true")
     */
    private $icone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDebutExp(): ?string
    {
        return $this->debutExp;
    }

    public function setDebutExp(string $debutExp): self
    {
        $this->debutExp = $debutExp;

        return $this;
    }

    public function getFinExp(): ?string
    {
        return $this->finExp;
    }

    public function setFinExp(?string $finExp): self
    {
        $this->finExp = $finExp;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(string $icone): self
    {
        $this->icone = $icone;

        return $this;
    }
}
