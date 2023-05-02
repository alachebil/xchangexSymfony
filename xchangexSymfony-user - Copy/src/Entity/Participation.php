<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePart = null;

    #[ORM\ManyToOne(inversedBy: 'Participation')]
    private ?Evenement $Evenement = null;

    #[ORM\ManyToOne(inversedBy: 'Participation')]
    private ?User $User = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePart(): ?\DateTimeInterface
    {
        return $this->datePart;
    }

    public function setDatePart(\DateTimeInterface $datePart): self
    {
        $this->datePart = $datePart;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->Evenement;
    }

    public function setEvenement(?Evenement $Evenement): self
    {
        $this->Evenement = $Evenement;

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
