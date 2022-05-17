<?php

namespace Thangphu\DesignPattern\Decorater;

class MeatDecorater extends AbstractRealNoodleDecorater
{
    /**
     * @param $realNoodle
     */
    public function __construct($realNoodle)
    {
        $this->toping = $realNoodle;
    }

    /**
     * @return int
     */
    function getPrice(): int
    {
        return 10000 + $this->toping->getPrice();
    }

    /**
     * @return string
     */
    function getName(): string
    {
        return $this->toping->getName() . " Add Meat ";
    }
}
