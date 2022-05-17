<?php

namespace Thangphu\DesignPattern\Decorater;

class OrderDecorater
{
    /**
     * @return string
     */
    public function order()
    {
        $orderRealNoodle = new EggDecorater(new MeatDecorater(new RealNoodle()));
        return $orderRealNoodle->getName() . "\n" . $orderRealNoodle->getPrice() . "\n";
    }
}
