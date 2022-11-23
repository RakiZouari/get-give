<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var string
     * @Assert\NotBlank(message="Name trainer is required")
     * @ORM\Column(name="nomCours", type="string", length=50, nullable=false)
     */
    private $nomcours;

    /**
     * @var string|null
     * @ORM\Column(name="typeCours", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $typecours = 'NULL';

    /**
     * @var string
     * @Assert\NotBlank(message=" titre doit etre non vide")
     *
     * @ORM\Column(name="specialite", type="string", length=100, nullable=false)
     */
    private $specialite;

    /**
     * @var int
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="nbHeure", type="integer", nullable=false)
     */
    private $nbheure;

    /**
     * @var string
     *
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="dateDebut", type="string", length=15, nullable=false)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="dateFin", type="string", length=15, nullable=false)
     */
    private $datefin;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdcours(): ?int
    {
        return $this->idcours;
    }

    public function getNomcours(): ?string
    {
        return $this->nomcours;
    }

    public function setNomcours(string $nomcours): self
    {
        $this->nomcours = $nomcours;

        return $this;
    }

    public function getTypecours(): ?string
    {
        return $this->typecours;
    }

    public function setTypecours(?string $typecours): self
    {
        $this->typecours = $typecours;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getNbheure(): ?int
    {
        return $this->nbheure;
    }

    public function setNbheure(int $nbheure): self
    {
        $this->nbheure = $nbheure;

        return $this;
    }

    public function getDatedebut(): ?string
    {
        return $this->datedebut;
    }

    public function setDatedebut(string $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?string
    {
        return $this->datefin;
    }

    public function setDatefin(string $datefin): self
    {
        $this->datefin = $datefin;

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
