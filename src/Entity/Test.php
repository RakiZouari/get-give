<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Test
 *
 * @ORM\Table(name="test", indexes={@ORM\Index(name="idCours", columns={"idCours"}), @ORM\Index(name="iddd", columns={"id_user"})})
 * @ORM\Entity
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="idT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idt;

    /**
     * @var string
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="nomT", type="string", length=30, nullable=false)
     */
    private $nomt;

    /**
     * @var string
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="dateT", type="string", length=30, nullable=false)
     */
    private $datet;

    /**
     * @var int
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="dureT", type="integer", nullable=false)
     */
    private $duret;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCours", referencedColumnName="idCours")
     * })
     */
    private $idcours;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdt(): ?int
    {
        return $this->idt;
    }

    public function getNomt(): ?string
    {
        return $this->nomt;
    }

    public function setNomt(string $nomt): self
    {
        $this->nomt = $nomt;

        return $this;
    }

    public function getDatet(): ?string
    {
        return $this->datet;
    }

    public function setDatet(string $datet): self
    {
        $this->datet = $datet;

        return $this;
    }

    public function getDuret(): ?int
    {
        return $this->duret;
    }

    public function setDuret(int $duret): self
    {
        $this->duret = $duret;

        return $this;
    }

    public function getIdcours(): ?Cours
    {
        return $this->idcours;
    }

    public function setIdcours(?Cours $idcours): self
    {
        $this->idcours = $idcours;

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
