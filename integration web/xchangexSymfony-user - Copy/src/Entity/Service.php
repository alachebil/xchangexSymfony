<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column]
    private int $idService;

    #[ORM\Column(length: 255)]
    private string $titreService;

    #[ORM\Column(length: 255)]
    private string $typeService;

    #[ORM\Column(length: 255)]
    private string $descriptionService;

    #[ORM\Column(length: 255)]
    private string $lieuService;

    public function getId(): ?int
    {
        return $this->id;
    }

 

    public function getTitreService(): ?string
    {
        return $this->titreService;
    }

    public function setTitreService(string $titreService): self
    {
        $this->titreService = $titreService;

        return $this;
    }

    public function getTypeService(): ?string
    {
        return $this->typeService;
    }

    public function setTypeService(string $typeService): self
    {
        $this->typeService = $typeService;

        return $this;
    }

    public function getDescriptionService(): ?string
    {
        return $this->descriptionService;
    }

    public function setDescriptionService(string $descriptionService): self
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }

    public function getLieuService(): ?string
    {
        return $this->lieuService;
    }

    public function setLieuService(string $lieuService): self
    {
        $this->lieuService = $lieuService;

        return $this;
    }
}
