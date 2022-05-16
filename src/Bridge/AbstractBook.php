<?php

namespace Thangphu\DesignPattern\Bridge;

abstract class AbstractBook
{
    /**
     * @var ColorInterface
     */
    public ColorInterface $color;

    /**
     * @param ColorInterface
     */
    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    protected abstract function getInfo(): string;
}
