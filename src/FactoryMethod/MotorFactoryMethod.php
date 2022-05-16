<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class MotorFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by MotorFactoryMethod";
    }
}
