<?php

namespace Thangphu\DesignPattern\Facade;

class FruitJuiceFacade implements WaterInterface
{
    /**
     * @return string
     */
    public function drink(): string
    {
        return "drinking fruit juice";
    }
}
