<?php

namespace Thangphu\DesignPattern\FactoryMethod;

interface TransportInterface
{
    /**
     * @return VehicleIntreface
     */
    public function deliver(): VehicleIntreface;
}
