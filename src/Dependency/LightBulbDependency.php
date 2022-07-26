<?php

namespace Thangphu\DesignPattern\Dependency;

class LightBulbDependency
{
    /**
     * @var StatusDependency
     */
    protected StatusDependency $status;

    /**
     * @param StatusDependency $status
     */
    public function __construct(StatusDependency $status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return "The light is " . $this->status->getName() . "\n";
    }
}
