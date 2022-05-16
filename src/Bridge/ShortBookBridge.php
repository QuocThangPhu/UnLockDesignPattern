<?php

namespace Thangphu\DesignPattern\Bridge;

class ShortBookBridge extends AbstractBook
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return "the short book has little content with " . $this->color->getColor() . "\n";
    }
}
