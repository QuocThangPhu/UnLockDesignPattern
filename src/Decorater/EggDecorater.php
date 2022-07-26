<?php

namespace Thangphu\DesignPattern\Decorater;

class EggDecorater extends AbstractRealNoodleDecorater
{
    /**
     * @var $toping
     */
    protected $toping;

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
        return 5000 + $this->toping->getPrice();
    }

    /**
     * @return string
     */
    function getName(): string
    {
        return $this->toping->getName() . " Add Egg ";
    }
}
