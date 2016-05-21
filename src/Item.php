<?php
declare(strict_types = 1);

namespace Acme\Shop;

class Item
{
    public $code;
    public $price;

    public function __construct(string $code, int $price)
    {
        $this->code = $code;
        $this->price = $price;
    }





    









//    public function toArray(): array
//    {
//        return [
//            'code' => $this->code,
//            'price' => $this->price->toInt(),
//        ];
//    }
}
