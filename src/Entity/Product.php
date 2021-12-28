<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private $category;

    #[ORM\Column(type: 'float')]
    private $price;

    #[ORM\Column(type: 'integer')]
    private $quantity;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private $seller;

    #[ORM\Column(type: 'string', length: 255)]
    private $date;

    #[ORM\Column(type: 'string', length: 4)]
    private $state;

    #[ORM\Column(type: 'float')]
    private $shipping_price;

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?Category {
        return $this->category;
    }

    public function setCategory(?Category $category): self {
        $this->category = $category;

        return $this;
    }

    public function getPrice(): ?float {
        return $this->price;
    }

    public function setPrice(float $price): self {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?int {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(string $description): self {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string {
        return $this->image;
    }

    public function setImage(string $image): self {
        $this->image = $image;

        return $this;
    }

    public function getSeller(): ?User {
        return $this->seller;
    }

    public function setSeller(?User $seller): self {
        $this->seller = $seller;

        return $this;
    }

    public function getDate(): ?string {
        return $this->date;
    }

    public function setDate(string $date): self {
        $this->date = $date;

        return $this;
    }

    public function getState(): ?string {
        return $this->state;
    }

    public function setState(string $state): self {
        $this->state = $state;

        return $this;
    }

    public function getShippingPrice(): ?float {
        return $this->shipping_price;
    }

    public function setShippingPrice(float $shipping_price): self {
        $this->shipping_price = $shipping_price;

        return $this;
    }
}
