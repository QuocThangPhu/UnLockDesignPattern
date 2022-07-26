<?php

namespace Thangphu\DesignPattern\Adapter;

class UserAdapter implements UserInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param $name
     * @return void
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
