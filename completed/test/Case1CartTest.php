<?php
namespace Acme\Shop;

class Case1CartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function addItem()
    {
        $item1 = new Item('code1', 100);
        $item2 = new Item('code2', 200);

        $cart = new Cart();
        $cart->addItem($item1);
        $cart->addItem($item2);

        $this->assertSame(300, $cart->calculateTotalPrice());

        $cart->addItem(new Item('code3', 300));
        $this->assertSame(600, $cart->calculateTotalPrice());
    }











//    /**
//     * @test
//     */
//    public function addItem_商品以外を追加()
//    {
//        $item1 = new Item('code1', 100);
//        $item2 = new Item('code2', 200);
//
//        $cart = new Cart();
//        $cart->addItem($item1);
//        $cart->addItem($item2);
//
//        $cart->addItem(new Item('code3', 300));
//
//        $this->assertSame(600, $cart->calculateTotalPrice());
//    }
}

