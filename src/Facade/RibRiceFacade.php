<?php

namespace Thangphu\DesignPattern\Facade;

class RibRiceFacade implements RiceInterface
{
    /**
     * @return string
     */
    public function eat(): string
    {
        return "Eating Rib Rice";
    }
}
