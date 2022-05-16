<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class BicycleFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by BicycleFactoryMethod";
    }
}
