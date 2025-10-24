<?php

namespace App\Entity;

use App\Repository\StockItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockItemRepository::class)]
class StockItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 32, nullable: true)]
    private ?string $ean = null;

    #[ORM\Column(length: 128)]
    private ?string $producer_code = null;

    #[ORM\Column(length: 128)]
    private ?string $our_code = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $price = null;

    #[ORM\Column(length: 128)]
    private ?string $producer = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): static
    {
        $this->ean = $ean;

        return $this;
    }

    public function getProducerCode(): ?string
    {
        return $this->producer_code;
    }

    public function setProducerCode(string $producer_code): static
    {
        $this->producer_code = $producer_code;

        return $this;
    }

    public function getOurCode(): ?string
    {
        return $this->our_code;
    }

    public function setOurCode(string $our_code): static
    {
        $this->our_code = $our_code;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getProducer(): ?string
    {
        return $this->producer;
    }

    public function setProducer(string $producer): static
    {
        $this->producer = $producer;

        return $this;
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
}
