<?php
declare(strict_types = 1);

namespace Acme\Shop;

class Item implements Arrayable
{
    private $code;
    private $price;

    public function __construct(string $code, int $price)
    {
        $this->code = $code;
        $this->price = new Price($price);
    }

    public function price(): Price
    {
        return $this->price;
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'price' => $this->price->toInt(),
        ];
    }
}
