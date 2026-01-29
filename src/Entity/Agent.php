<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgentRepository::class)]
class Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
        private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $role = null;

    #[ORM\Column]
    private ?int $speed = null;

    #[ORM\Column]
    private ?int $armor = null;

    #[ORM\Column(type: "text")]
    private ?string $gadget = null;

    #[ORM\Column(type: "text")]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getArmor(): ?int
    {
        return $this->armor;
    }

    public function setArmor(?int $armor): static
    {
        $this->armor = $armor;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->armor;
    }

    public function setSpeed(?int $armor): static
    {
        $this->armor = $armor;

        return $this;
    }

    public function getGadget(): ?string
    {
        return $this->gadget;
    }

    public function setGadget(?string $gadget): static
    {
        $this->gadget = $gadget;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->speed;
    }

    public function setRole(?string $speed): static
    {
        $this->speed = $speed;

        return $this;
    }
}
