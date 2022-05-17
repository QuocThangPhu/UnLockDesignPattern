<?php

namespace Thangphu\DesignPattern\FactoryMethod;

interface VehicleInterface
{
    /**
     * @return String
     */
    public function shippingMethod(): string;
}
