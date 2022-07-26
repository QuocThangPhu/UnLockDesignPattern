<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class BicycleFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by BicycleFactoryMethod";
    }
}
