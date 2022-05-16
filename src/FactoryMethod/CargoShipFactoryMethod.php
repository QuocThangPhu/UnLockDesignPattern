<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class CargoShipFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by CargoShipFactoryMethod";
    }
}
