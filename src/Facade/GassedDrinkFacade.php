<?php

namespace Thangphu\DesignPattern\Facade;

class GassedDrinkFacade implements WaterInterface
{
    /**
     * @return string
     */
    public function drink(): string
    {
        return "drinking GassedDrinkFacade";
    }
}
