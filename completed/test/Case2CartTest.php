<?php
namespace Acme\Shop;

class Case2CartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Cart
     */
    private $cart;

    public function setUp()
    {
        $this->cart = new Cart();
        $this->cart->addItem(new Item('code1', 100));
        $this->cart->addItem(new Item('code2', 200));
        $this->cart->addItem(new Item('code3', 300));
    }

    /**
     * @test
     * @expectedException \Acme\Shop\PreconditionException
     */
    public function addItem_商品点数が3点を超えれば例外()
    {
        $this->cart->addItem(new Item('code4', 400));
    }
}

