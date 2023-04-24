<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=255, nullable=false)
     */
    #[Assert\Length(min:5)]
    #[Assert\Length(max:20)]
    #[Assert\NotBlank (message:"veuillez saisir le nom de l'evenement ")]
    private $nomEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="type_event", type="string", length=255, nullable=false)
     */
    #[Assert\Length(min:5)]
    #[Assert\Length(max:20)]
    #[Assert\NotBlank (message:"veuillez saisir le type de l'evenement ")]
    private $typeEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */

    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="image_event", type="string", length=255, nullable=false)
     */
    private $imageEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description_event", type="string", length=255, nullable=false)
     */
    #[Assert\Length(min:5)]
    #[Assert\Length(max:20)]
    #[Assert\NotBlank (message:"veuillez saisir la drscription de l'evenement ")]
    private $descriptionEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_participants", type="integer", nullable=false)
     */
    #[Assert\Length(min:1)]
    #[Assert\Length(max:20)]
    #[Assert\NotBlank (message:"veuillez saisir le nom de l'evenement ")]
    private $nbParticipants;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getTypeEvent(): ?string
    {
        return $this->typeEvent;
    }

    public function setTypeEvent(string $typeEvent): self
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getImageEvent()
    {
        return $this->imageEvent;
    }

    public function setImageEvent($imageEvent)
    {
        $this->imageEvent = $imageEvent;

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getNbParticipants(): ?int
    {
        return $this->nbParticipants;
    }

    public function setNbParticipants(int $nbParticipants): self
    {
        $this->nbParticipants = $nbParticipants;

        return $this;
    }

    public function __toString()
    {
        return $this->nomEvent;
        
    }


    public function __construct()
    {
        $this->date = new \DateTime('now');
    }



}
