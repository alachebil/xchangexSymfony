<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="reclamation_ibfk_1", columns={"id_Echange"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_rec", type="string", length=255, nullable=false, options={"default"="Attente"})
     */
    private $etatRec = 'Attente';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reclamation", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateReclamation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="image_event", type="string", length=255, nullable=false)
     */
    private $imageEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reclamation", type="string", length=50, nullable=false)
     */
    private $descriptionReclamation;

    /**
     * @var \Echange
     *
     * @ORM\ManyToOne(targetEntity="Echange")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Echange", referencedColumnName="id_echange")
     * })
     */
    private $idEchange;

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getEtatRec(): ?string
    {
        return $this->etatRec;
    }

    public function setEtatRec(string $etatRec): self
    {
        $this->etatRec = $etatRec;

        return $this;
    }

    public function getDateReclamation(): ?\DateTimeInterface
    {
        return $this->dateReclamation;
    }

    public function setDateReclamation(\DateTimeInterface $dateReclamation): self
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    public function getImageEvent(): ?string
    {
        return $this->imageEvent;
    }

    public function setImageEvent(string $imageEvent): self
    {
        $this->imageEvent = $imageEvent;

        return $this;
    }

    public function getDescriptionReclamation(): ?string
    {
        return $this->descriptionReclamation;
    }

    public function setDescriptionReclamation(string $descriptionReclamation): self
    {
        $this->descriptionReclamation = $descriptionReclamation;

        return $this;
    }

    public function getIdEchange(): ?Echange
    {
        return $this->idEchange;
    }

    public function setIdEchange(?Echange $idEchange): self
    {
        $this->idEchange = $idEchange;

        return $this;
    }


}
