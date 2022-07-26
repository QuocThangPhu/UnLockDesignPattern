<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class ShipFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by ShipFactoryMethod";
    }
}
