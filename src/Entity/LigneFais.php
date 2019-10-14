<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneFaisRepository")
 */
class LigneFais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $idVisiteur;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $mois;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVisiteur(): ?string
    {
        return $this->idVisiteur;
    }

    public function setIdVisiteur(string $idVisiteur): self
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(string $mois): self
    {
        $this->mois = $mois;

        return $this;
    }
}
