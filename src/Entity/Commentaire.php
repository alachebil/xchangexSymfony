<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="id_service", type="integer", nullable=false)
     */
    private $idService;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_commentaire", type="string", length=255, nullable=false)
     */
    private $contenuCommentaire;

    public function getIdCommentaire(): ?int
    {
        return $this->idCommentaire;
    }

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function setIdService(int $idService): self
    {
        $this->idService = $idService;

        return $this;
    }

    public function getContenuCommentaire(): ?string
    {
        return $this->contenuCommentaire;
    }

    public function setContenuCommentaire(string $contenuCommentaire): self
    {
        $this->contenuCommentaire = $contenuCommentaire;

        return $this;
    }


}
