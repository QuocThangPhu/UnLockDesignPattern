<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class TruckFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "shipping by TruckFactoryMethod";
    }
}
