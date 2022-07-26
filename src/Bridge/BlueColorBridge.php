<?php

namespace Thangphu\DesignPattern\Bridge;

class BlueColorBridge implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return "the color is blue";
    }
}
