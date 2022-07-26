<?php

namespace Thangphu\DesignPattern\Dependency;

class SetStatusForLightDependency
{
    /**
     * @return string
     */
    public function setStatusForLight()
    {
        $status = new StatusDependency();
        $status->setName("off");

        $lightBulb = new LightBulbDependency($status);

        $status1 = new StatusDependency();
        $status1->setName("on");
        $lightBulb1 = new LightBulbDependency($status1);
        return "The light is " . $lightBulb->getStatus() . "\n"
            . "The light is " . $lightBulb1->getStatus() . "\n";
    }
}
