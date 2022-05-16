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
        $drinking = new FruitJuiceFacade();
        $result = $sitting->sit() . "\n" . $eating->eat() . "\n" . $drinking->drink() . "\n";
        return $result;
    }
}
