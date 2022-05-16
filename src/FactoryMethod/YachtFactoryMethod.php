<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class YachtFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Shipping by YachtFactoryMethod";
    }
}
