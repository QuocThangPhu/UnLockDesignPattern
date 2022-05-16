<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class SeaFactoryMethod implements TransportInterface
{
    /**
     * @return VehicleIntreface
     */
    public function deliver(): VehicleIntreface
    {
        $ramdom = rand(1, 3);
        switch ($ramdom) {
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
