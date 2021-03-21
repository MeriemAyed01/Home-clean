<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarteRepository::class)
 */
class Carte
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     
     */
    private $cardNum;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateExp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $CVC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cardHolder;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="carte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

   
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCardNum(): ?int
    {
        return $this->cardNum;
    }

    public function setCardNum(?int $cardNum): self
    {
        $this->cardNum = $cardNum;

        return $this;
    }

    public function getDateExp(): ?\DateTimeInterface
    {
        return $this->DateExp;
    }

    public function setDateExp(?\DateTimeInterface $DateExp): self
    {
        $this->DateExp = $DateExp;

        return $this;
    }

    public function getCVC(): ?int
    {
        return $this->CVC;
    }

    public function setCVC(?int $CVC): self
    {
        $this->CVC = $CVC;

        return $this;
    }

    public function getCardHolder(): ?string
    {
        return $this->cardHolder;
    }

    public function setCardHolder(?string $cardHolder): self
    {
        $this->cardHolder = $cardHolder;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
