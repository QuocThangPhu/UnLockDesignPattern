<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class NotFoundVehicleFactoryMethod implements VehicleInterface
{
    /**
     * @return string
     */
    public function shippingMethod(): string
    {
        return "Not Found Vehicle";
    }
}
