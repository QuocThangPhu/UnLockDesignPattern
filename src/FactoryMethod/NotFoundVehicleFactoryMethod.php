<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class NotFoundVehicleFactoryMethod implements VehicleIntreface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Not Found Vehicle";
    }
}
