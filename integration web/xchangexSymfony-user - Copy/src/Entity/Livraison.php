<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLiv = null;

    #[ORM\Column(length: 255)]
    private ?string $typeLiv = null;

    #[ORM\Column(length: 255)]
    private ?string $adressLiv = null;

    #[ORM\Column(length: 255)]
    private ?string $produit = null;

    #[ORM\ManyToOne(inversedBy: 'Livraison')]
    private ?User $User = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLiv(): ?\DateTimeInterface
    {
        return $this->dateLiv;
    }

    public function setDateLiv(\DateTimeInterface $dateLiv): self
    {
        $this->dateLiv = $dateLiv;

        return $this;
    }

    public function getTypeLiv(): ?string
    {
        return $this->typeLiv;
    }

    public function setTypeLiv(string $typeLiv): self
    {
        $this->typeLiv = $typeLiv;

        return $this;
    }

    public function getAdressLiv(): ?string
    {
        return $this->adressLiv;
    }

    public function setAdressLiv(string $adressLiv): self
    {
        $this->adressLiv = $adressLiv;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
