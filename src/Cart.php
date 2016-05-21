<?php
declare(strict_types = 1);

namespace Acme\Shop;

class Cart
{
    /**
     * @var Item[]
     */
    public $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function calculateTotalPrice(): int
    {
        $totalPrice = 0;

        foreach ($this->items as $item) {
            $totalPrice = $totalPrice + $item->price;
        }

        return $totalPrice;
    }
















//    public function toArray(): array
//    {
//        return array_map(function (Item $item) {
//            return $item->toArray();
//        }, $this->items);
//    }
}
