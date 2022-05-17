<?php

namespace Thangphu\DesignPattern\Decorater;

class RealNoodle implements RealNoodleInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 20000;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Real Noodle";
    }
}
