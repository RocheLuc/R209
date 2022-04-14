<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteRepository::class)
 */
class Note
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="notes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProjet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $note;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $createdAT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etatNote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProjet(): ?Projet
    {
        return $this->idProjet;
    }

    public function setIdProjet(?Projet $idProjet): self
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCreatedAT(): ?string
    {
        return $this->createdAT;
    }

    public function setCreatedAT(string $createdAT): self
    {
        $this->createdAT = $createdAT;

        return $this;
    }

    public function getEtatNote(): ?string
    {
        return $this->etatNote;
    }

    public function setEtatNote(string $etatNote): self
    {
        $this->etatNote = $etatNote;

        return $this;
    }
}
