<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class SeaFactoryMethod implements TransportInterface
{
    /**
     * @return VehicleInterface
     */
    public function deliver(): VehicleInterface
    {
        $randomNumber = rand(1, 3);
        switch ($randomNumber) {
            case 1:
                return new ShipFactoryMethod();
            case 2:
                return new CargoShipFactoryMethod();
            case 3:
                return new YachtFactoryMethod();
            default:
                return new NotFoundVehicleFactoryMethod();
        }
    }
}
