<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\comptable;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FicheFraisRepository")
 */
class FicheFrais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Comptable")
     */
    private $idComptable;

    /**
     * @ORM\Column(type="integer")
     */
    private $mois;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbJustificatifs;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $montantValide;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateModif;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Visiteur", inversedBy="ficheFrais")
     */
    private $idVisiteur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\etat", inversedBy="ficheFrais")
     */
    private $situation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdComptable(): ?comptable
    {
        return $this->idComptable;
    }

    public function setIdComptable(?comptable $idVisiteur): self
    {
        $this->idComptable = $idVisiteur;

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

    public function getNbJustificatifs(): ?int
    {
        return $this->nbJustificatifs;
    }

    public function setNbJustificatifs(int $nbJustificatifs): self
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    public function getMontantValide(): ?string
    {
        return $this->montantValide;
    }

    public function setMontantValide(string $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getIdVisiteur(): ?Visiteur
    {
        return $this->idVisiteur;
    }

    public function setIdVisiteur(?Visiteur $idVisiteur): self
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    public function getSituation(): ?etat
    {
        return $this->situation;
    }

    public function setLibEtat(?etat $situation): self
    {
        $this->situation = $situation;

        return $this;
    }
}
