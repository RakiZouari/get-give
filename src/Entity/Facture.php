<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="idCommandeFacture", columns={"idCommande"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="idF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idf;

    /**
     * @var int
     *
     * @ORM\Column(name="montantF", type="integer", nullable=false)
     */
    private $montantf;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommande", referencedColumnName="idCommande")
     * })
     */
    private $idcommande;

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function getMontantf(): ?int
    {
        return $this->montantf;
    }

    public function setMontantf(int $montantf): self
    {
        $this->montantf = $montantf;

        return $this;
    }

    public function getIdcommande(): ?Commande
    {
        return $this->idcommande;
    }

    public function setIdcommande(?Commande $idcommande): self
    {
        $this->idcommande = $idcommande;

        return $this;
    }


}
