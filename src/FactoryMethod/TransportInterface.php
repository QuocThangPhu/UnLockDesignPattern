<?php

namespace Thangphu\DesignPattern\FactoryMethod;

interface TransportInterface
{
    /**
     * @return VehicleInterface
     */
    public function deliver(): VehicleInterface;
}
