<?php
declare(strict_types = 1);

namespace Acme\Shop;

class Price
{
    const TAX_RATE = 1.08;
    
    private $value;

    public function __construct(int $price)
    {
        $this->value = $price;
    }

    public function add(self $price): self
    {
        return new self($this->value + $price->value);
    }

    public function withTax(): self
    {
        return new self((int)($this->value * static::TAX_RATE));
    }

    public function toInt(): int
    {
        return $this->value;
    }
}
