<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class CargoShipFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by CargoShipFactoryMethod";
    }
}
