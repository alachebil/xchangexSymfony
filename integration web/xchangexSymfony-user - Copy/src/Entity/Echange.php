<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Echange
 *
 * @ORM\Table(name="echange")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EchangeRepository")
 */
class Echange
{
    /**
     * @var int
     * 
     *
     * @ORM\Column(name="id_echange", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    
    private $idEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    #[Assert\Length(min:5)]
    #[Assert\Length(max:20)]
    #[Assert\NotBlank(message: "Username est vide")]
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="date_echange", type="string", nullable=false)
     */
    #[Assert\Length(min:10)]
    #[Assert\Length(max:10)]
    #[Assert\NotBlank(message: "Date est vide")]
    private $dateEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_echange", type="string", length=50, nullable=false)
     */
    

    #[Assert\NotBlank(message: "Lieu est vide")]
    private $lieuEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="type_echange", type="string", length=50, nullable=false)
     */
    #[Assert\NotBlank(message: "Le type est vide")]
    private $typeEchange;

    public function getIdEchange(): ?int
    {
        return $this->idEchange;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getDateEchange(): ?string
    {
        return $this->dateEchange;
    }

    public function setDateEchange(string $dateEchange): self
    {
        $this->dateEchange = $dateEchange;

        return $this;
    }

    public function getLieuEchange(): ?string
    {
        return $this->lieuEchange;
    }

    public function setLieuEchange(string $lieuEchange): self
    {
        $this->lieuEchange = $lieuEchange;

        return $this;
    }

    public function getTypeEchange(): ?string
    {
        return $this->typeEchange;
    }

    public function setTypeEchange(string $typeEchange): self
    {
        $this->typeEchange = $typeEchange;

        return $this;
    }

    public function __toString()
{

    return $this->username;
}

}
