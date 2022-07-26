<?php

namespace Thangphu\DesignPattern\Decorater;

interface RealNoodleInterface
{
    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return string
     */
    public function getName(): string;
}
