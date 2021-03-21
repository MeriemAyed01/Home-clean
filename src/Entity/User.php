<?php

namespace App\Entity;

use App\Repository\UserRepository;
use App\Entity\Ordre;
use App\Entity\Carte;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
      /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
     private $Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
     private $Password;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Role;

    /**
     * @ORM\Column(type="integer")
     */
    private $point;

    /**
     * @ORM\OneToMany(targetEntity=ordre::class, mappedBy="user", orphanRemoval=true)
     */
    private $ordre;

    /**
     * @ORM\OneToMany(targetEntity=carte::class, mappedBy="user", orphanRemoval=true)
     */
    private $carte;

    public function __construct()
    {
        $this->ordre = new ArrayCollection();
        $this->carte = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(?string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->Phone;
    }

    public function setPhone(?int $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(?string $Role): self
    {
        $this->Role = $Role;

        return $this;
    }

    public function getPoint(): ?int
    {
        return $this->point;
    }

    public function setPoint(int $point): self
    {
        $this->point = $point;

        return $this;
    }

    /**
     * @return Collection|ordre[]
     */
    public function getOrdre(): Collection
    {
        return $this->ordre;
    }

    public function addOrdre(ordre $ordre): self
    {
        if (!$this->ordre->contains($ordre)) {
            $this->ordre[] = $ordre;
            $ordre->setUser($this);
        }

        return $this;
    }

    public function removeOrdre(ordre $ordre): self
    {
        if ($this->ordre->removeElement($ordre)) {
            // set the owning side to null (unless already changed)
            if ($ordre->getUser() === $this) {
                $ordre->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|carte[]
     */
    public function getCarte(): Collection
    {
        return $this->carte;
    }

    public function addCarte(carte $carte): self
    {
        if (!$this->carte->contains($carte)) {
            $this->carte[] = $carte;
            $carte->setUser($this);
        }

        return $this;
    }

    public function removeCarte(carte $carte): self
    {
        if ($this->carte->removeElement($carte)) {
            // set the owning side to null (unless already changed)
            if ($carte->getUser() === $this) {
                $carte->setUser(null);
            }
        }

        return $this;
    }



   
}
