<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TruckRepository")
 */
class Truck
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $kenteken;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $merk;

    /**
     * @ORM\Column(type="date")
     */
    private $bouwjaar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKenteken(): ?string
    {
        return $this->kenteken;
    }

    public function setKenteken(string $kenteken): self
    {
        $this->kenteken = $kenteken;

        return $this;
    }

    public function getMerk(): ?string
    {
        return $this->merk;
    }

    public function setMerk(string $merk): self
    {
        $this->merk = $merk;

        return $this;
    }

    public function getBouwjaar(): ?\DateTimeInterface
    {
        return $this->bouwjaar;
    }

    public function setBouwjaar(\DateTimeInterface $bouwjaar): self
    {
        $this->bouwjaar = $bouwjaar;

        return $this;
    }
}
