<?php

namespace Thangphu\DesignPattern\Facade;

class BraisedBeefRiceFacade implements RiceInterface
{
    /**
     * @return string
     */
    public function eat(): string
    {
        return "eating BraisedBeefRiceFacade";
    }
}
