<?php
namespace Acme\Shop;

class Case5CartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @outputBuffering
     * @runInSeparateProcess
     */
    public function 商品をJSONで出力()
    {
        $controller = new ApiController();
        $controller->item();

        $this->expectOutputString('{"code":"code1","price":100}');
    }

    /**
     * @test
     * @outputBuffering
     * @runInSeparateProcess
     */
    public function カートをJSONで出力()
    {
        $controller = new ApiController();
        $controller->cart();

        $this->expectOutputString(
            '[{"code":"code1","price":100},{"code":"code2","price":200}]'
        );
    }
}

