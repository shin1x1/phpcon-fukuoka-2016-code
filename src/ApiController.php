<?php
declare(strict_types = 1);

namespace Acme\Shop;

class ApiController
{
    public function item()
    {
        $item = new Item('code1', 100);
        $this->json($item);
    }

    public function cart()
    {
        $cart = new Cart();
        $cart->addItem(new Item('code1', 100));
        $cart->addItem(new Item('code2', 200));

        $this->json($cart);
    }

    private function json($entity)
    {
        header('Content-Type: application/json');
        echo json_encode($entity->toArray());
    }
}






















