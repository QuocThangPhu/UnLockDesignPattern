<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class ShipFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by ShipFactoryMethod";
    }
}
