<?php
namespace Acme\Shop;

class Case3CartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 商品小計に消費税を加算()
    {
        $cart = new Cart();

        $item1 = new Item('code1', 100);
        $cart->addItem($item1);

        $item2 = new Item('code2', 200);
        $cart->addItem($item2);

        $this->assertEquals(new Price(324), $cart->calculateTotalPrice());
        $this->assertEquals(new Price(324), $cart->calculateTotalPrice());
    }
}

