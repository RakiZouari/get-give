<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="firstnameu", type="string", length=30, nullable=false)
     */
    private $firstnameu;

    /**
     * @var string
     *
     * @ORM\Column(name="lastnameu", type="string", length=30, nullable=false)
     */
    private $lastnameu;

    /**
     * @var string
     *
     * @ORM\Column(name="loginu", type="string", length=30, nullable=false)
     */
    private $loginu;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordu", type="string", length=30, nullable=false)
     */
    private $passwordu;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=false)
     */
    private $role;

    /**
     * @var int|null
     *
     * @ORM\Column(name="charge_horaire", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $chargeHoraire = NULL;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getFirstnameu(): ?string
    {
        return $this->firstnameu;
    }

    public function setFirstnameu(string $firstnameu): self
    {
        $this->firstnameu = $firstnameu;

        return $this;
    }

    public function getLastnameu(): ?string
    {
        return $this->lastnameu;
    }

    public function setLastnameu(string $lastnameu): self
    {
        $this->lastnameu = $lastnameu;

        return $this;
    }

    public function getLoginu(): ?string
    {
        return $this->loginu;
    }

    public function setLoginu(string $loginu): self
    {
        $this->loginu = $loginu;

        return $this;
    }

    public function getPasswordu(): ?string
    {
        return $this->passwordu;
    }

    public function setPasswordu(string $passwordu): self
    {
        $this->passwordu = $passwordu;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getChargeHoraire(): ?int
    {
        return $this->chargeHoraire;
    }

    public function setChargeHoraire(?int $chargeHoraire): self
    {
        $this->chargeHoraire = $chargeHoraire;

        return $this;
    }


}
