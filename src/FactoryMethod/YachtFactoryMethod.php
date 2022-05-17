<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class YachtFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by YachtFactoryMethod";
    }
}
