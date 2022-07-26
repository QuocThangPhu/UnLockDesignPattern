<?php

namespace Thangphu\DesignPattern\Dependency;

class StatusDependency
{
    /**
     * @var string
     */
    public string $name;

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
