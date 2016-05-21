<?php
namespace Acme\Shop;

class Case2CartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 商品小計に消費税を加算()
    {
        $cart = new Cart();

        $item1 = new Item('code1', 100);
        $item1->price = (int)($item1->price * 1.08);
        $cart->addItem($item1);

        $item2 = new Item('code2', 200);
        $item2->price = (int)($item2->price * 1.09);
        $cart->addItem($item2);

        $this->assertEquals(324, $cart->calculateTotalPrice());
    }
}






























