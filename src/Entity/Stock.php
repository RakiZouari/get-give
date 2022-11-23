<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", indexes={@ORM\Index(name="idPStock", columns={"idP"})})
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var int
     *
     * @ORM\Column(name="idS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ids;

    /**
     * @var int
     *
     * @ORM\Column(name="capaciteS", type="integer", nullable=false)
     */
    private $capacites;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieS", type="string", length=250, nullable=false)
     */
    private $categories;

    /**
     * @var int
     *
     * @ORM\Column(name="nbProdEnStock", type="integer", nullable=false)
     */
    private $nbprodenstock;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idP", referencedColumnName="idP")
     * })
     */
    private $idp;

    public function getIds(): ?int
    {
        return $this->ids;
    }

    public function getCapacites(): ?int
    {
        return $this->capacites;
    }

    public function setCapacites(int $capacites): self
    {
        $this->capacites = $capacites;

        return $this;
    }

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(string $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getNbprodenstock(): ?int
    {
        return $this->nbprodenstock;
    }

    public function setNbprodenstock(int $nbprodenstock): self
    {
        $this->nbprodenstock = $nbprodenstock;

        return $this;
    }

    public function getIdp(): ?Produit
    {
        return $this->idp;
    }

    public function setIdp(?Produit $idp): self
    {
        $this->idp = $idp;

        return $this;
    }


}
