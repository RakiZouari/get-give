<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_userRec", columns={"id_user"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionR", type="string", length=250, nullable=false)
     */
    private $descriptionr;

    /**
     * @var string
     *
     * @ORM\Column(name="auteurR", type="string", length=30, nullable=false)
     */
    private $auteurr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateR", type="date", nullable=false)
     */
    private $dater;

    /**
     * @var string
     *
     * @ORM\Column(name="etatR", type="string", length=50, nullable=false)
     */
    private $etatr;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdr(): ?int
    {
        return $this->idr;
    }

    public function getDescriptionr(): ?string
    {
        return $this->descriptionr;
    }

    public function setDescriptionr(string $descriptionr): self
    {
        $this->descriptionr = $descriptionr;

        return $this;
    }

    public function getAuteurr(): ?string
    {
        return $this->auteurr;
    }

    public function setAuteurr(string $auteurr): self
    {
        $this->auteurr = $auteurr;

        return $this;
    }

    public function getDater(): ?\DateTimeInterface
    {
        return $this->dater;
    }

    public function setDater(\DateTimeInterface $dater): self
    {
        $this->dater = $dater;

        return $this;
    }

    public function getEtatr(): ?string
    {
        return $this->etatr;
    }

    public function setEtatr(string $etatr): self
    {
        $this->etatr = $etatr;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
