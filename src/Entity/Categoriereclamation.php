<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoriereclamation
 *
 * @ORM\Table(name="categoriereclamation", indexes={@ORM\Index(name="idR", columns={"idR"})})
 * @ORM\Entity
 */
class Categoriereclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcr;

    /**
     * @var string
     *
     * @ORM\Column(name="typeCR", type="string", length=50, nullable=false)
     */
    private $typecr;

    /**
     * @var string
     *
     * @ORM\Column(name="titreCR", type="string", length=50, nullable=false)
     */
    private $titrecr;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idR", referencedColumnName="idR")
     * })
     */
    private $idr;

    public function getIdcr(): ?int
    {
        return $this->idcr;
    }

    public function getTypecr(): ?string
    {
        return $this->typecr;
    }

    public function setTypecr(string $typecr): self
    {
        $this->typecr = $typecr;

        return $this;
    }

    public function getTitrecr(): ?string
    {
        return $this->titrecr;
    }

    public function setTitrecr(string $titrecr): self
    {
        $this->titrecr = $titrecr;

        return $this;
    }

    public function getIdr(): ?Reclamation
    {
        return $this->idr;
    }

    public function setIdr(?Reclamation $idr): self
    {
        $this->idr = $idr;

        return $this;
    }


}
