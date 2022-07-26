<?php

namespace Thangphu\DesignPattern\Bridge;

class LongBookBridge extends AbstractBook
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return "the long book has a lot of content with " . $this->color->getColor() . "\n";
    }
}
