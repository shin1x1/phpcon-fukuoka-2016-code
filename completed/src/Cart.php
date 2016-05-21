<?php
declare(strict_types = 1);

namespace Acme\Shop;

class Cart implements Arrayable
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function calculateTotalPrice(): Price
    {
        $totalPrice = new Price(0);

        foreach ($this->items as $item) {
            $price = $item->price()->withTax();
            $totalPrice = $totalPrice->add($price);
        }

        return $totalPrice;
    }

    public function toArray(): array
    {
        return array_map(function (Item $item) {
            return $item->toArray();
        }, $this->items);
    }
}
