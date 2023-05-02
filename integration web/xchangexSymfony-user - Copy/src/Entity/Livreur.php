<?php

namespace App\Entity;

use App\Repository\LivreurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreurRepository::class)]
class Livreur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $num = null;

    #[ORM\Column(length: 255)]
    private ?string $nomLiv = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomLiv = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getNomLiv(): ?string
    {
        return $this->nomLiv;
    }

    public function setNomLiv(string $nomLiv): self
    {
        $this->nomLiv = $nomLiv;

        return $this;
    }

    public function getPrenomLiv(): ?string
    {
        return $this->prenomLiv;
    }

    public function setPrenomLiv(string $prenomLiv): self
    {
        $this->prenomLiv = $prenomLiv;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }
}
