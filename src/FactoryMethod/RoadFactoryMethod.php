<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class RoadFactoryMethod implements TransportInterface
{
    /**
     * @return VehicleIntreface
     */
    public function deliver(): VehicleIntreface
    {
        $ramdom = rand(0, 2);
        switch ($ramdom) {
            case 0:
                return new TruckFactoryMethod();
            case 1:
                return new MotorFactoryMethod();
            case 2:
                return new BicycleFactoryMethod();
            default:
                return new NotFoundVehicleFactoryMethod();
        }

    }
}
