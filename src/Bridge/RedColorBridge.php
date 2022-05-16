<?php

namespace Thangphu\DesignPattern\Bridge;

class RedColorBridge implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return "the color is red";
    }
}
