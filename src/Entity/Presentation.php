<?php

namespace App\Entity;

use App\Repository\PresentationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PresentationRepository::class)
 */
class Presentation
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soustitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $p1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $p2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $info1;

    /**
     * @ORM\Column(type="string", length=255, nullable="true")
     */
    private $info2;

    /**
     * @ORM\Column(type="string", length=255, nullable="true")
     */
    private $info3;

    /**
     * @ORM\Column(type="string", length=255, nullable="true")
     */
    private $info4;

    /**
     * @ORM\Column(type="string", length=255, nullable="true")
     */
    private $info5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSoustitle(): ?string
    {
        return $this->soustitle;
    }

    public function setSoustitle(string $soustitle): self
    {
        $this->soustitle = $soustitle;

        return $this;
    }

    public function getP1(): ?string
    {
        return $this->p1;
    }

    public function setP1(string $p1): self
    {
        $this->p1 = $p1;

        return $this;
    }

    public function getP2(): ?string
    {
        return $this->p2;
    }

    public function setP2(string $p2): self
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfo2()
    {
        return $this->info2;
    }

    /**
     * @param mixed $info2
     */
    public function setInfo2($info2): void
    {
        $this->info2 = $info2;
    }

    /**
     * @return mixed
     */
    public function getInfo3()
    {
        return $this->info3;
    }

    /**
     * @param mixed $info3
     */
    public function setInfo3($info3): void
    {
        $this->info3 = $info3;
    }

    /**
     * @return mixed
     */
    public function getInfo4()
    {
        return $this->info4;
    }

    /**
     * @param mixed $info4
     */
    public function setInfo4($info4): void
    {
        $this->info4 = $info4;
    }

    /**
     * @return mixed
     */
    public function getInfo5()
    {
        return $this->info5;
    }

    /**
     * @param mixed $info5
     */
    public function setInfo5($info5): void
    {
        $this->info5 = $info5;
    }

    public function getInfo1(): ?string
    {
        return $this->info1;
    }

    public function setInfo1(string $info1): self
    {
        $this->info1 = $info1;

        return $this;
    }

}
