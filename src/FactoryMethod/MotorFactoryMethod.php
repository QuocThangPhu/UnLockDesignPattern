<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class MotorFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by MotorFactoryMethod";
    }
}
