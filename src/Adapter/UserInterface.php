<?php

namespace Thangphu\DesignPattern\Adapter;

interface UserInterface
{
    /**
     * @param $name
     * @return void
     */
    public function setName($name): void;

    /**
     * @return string
     */
    public function getName(): string;
}
