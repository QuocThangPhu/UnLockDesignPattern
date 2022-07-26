<?php

namespace Thangphu\DesignPattern\Facade;

use Thangphu\DesignPattern\Facade\DinnerTableFacade;
use Thangphu\DesignPattern\Facade\BraisedBeefRiceFacade;
use Thangphu\DesignPattern\Facade\RibRiceFacade;

class RestaurantFacade
{
    /**
     * @return string
     */
    public function eatDinner(): string
    {
        $sitting = new DinnerTableFacade();
        $eating = new RibRiceFacade();
        $eating2 = new BraisedBeefRiceFacade();
        $drinking = new FruitJuiceFacade();
        $drinking2 = new GassedDrinkFacade();
        $result = $sitting->sit() . "\n" . $eating->eat() . " and " . $eating2->eat() .
            "\n" . $drinking->drink() . " and " . $drinking2->drink() . "\n";
        return $result;
    }
}
