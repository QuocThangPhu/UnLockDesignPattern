<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class TruckFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "shipping by TruckFactoryMethod";
    }
}
