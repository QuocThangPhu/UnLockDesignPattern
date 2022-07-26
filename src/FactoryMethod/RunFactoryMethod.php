<?php

namespace Thangphu\DesignPattern\FactoryMethod;

use Thangphu\DesignPattern\FactoryMethod\RoadFactoryMethod;
use Thangphu\DesignPattern\FactoryMethod\SeaFactoryMethod;

class RunFactoryMethod
{
    /**
     * @return string
     */
    public function run(): string
    {
        $transportRoad = new RoadFactoryMethod();
        for ($i = 1; $i <= 5; $i++) {
            $result1 = $transportRoad->deliver()->shippingMethod() . "\n";
        }
        $transportSea = new SeaFactoryMethod();
        for ($i = 1; $i <= 5; $i++) {
            $result2 = $transportSea->deliver()->shippingMethod() . "\n";
        }
        return
            $result1 . "------------Change----------- \n" . $result2;
    }
}
