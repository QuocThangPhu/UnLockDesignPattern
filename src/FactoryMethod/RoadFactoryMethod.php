<?php

namespace Thangphu\DesignPattern\FactoryMethod;

class RoadFactoryMethod implements TransportInterface
{
    /**
     * @return VehicleInterface
     */
    public function deliver(): VehicleInterface
    {
        $randomNumber = rand(0, 2);
        switch ($randomNumber) {
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
