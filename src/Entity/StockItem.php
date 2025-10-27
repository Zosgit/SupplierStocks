<?php

namespace App\Entity;

use App\Repository\StockItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockItemRepository::class)]
class StockItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $externalId = null;

    #[ORM\Column(length: 128)]
    private ?string $mpn = null;

    #[ORM\Column(length: 128)]
    private ?string $producerName = null;

    #[ORM\Column(length: 32, nullable: true)]
    private ?string $ean = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private ?string $price = null;

    #[ORM\Column(type: 'integer')]
    private ?int $quantity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(string $externalId): static
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(string $mpn): static
    {
        $this->mpn = $mpn;
        return $this;
    }

    public function getProducerName(): ?string
    {
        return $this->producerName;
    }

    public function setProducerName(string $producerName): static
    {
        $this->producerName = $producerName;
        return $this;
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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;
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
}
