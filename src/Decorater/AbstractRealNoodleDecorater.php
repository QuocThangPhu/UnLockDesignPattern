<?php

namespace Thangphu\DesignPattern\Decorater;
abstract class AbstractRealNoodleDecorater implements RealNoodleInterface
{
    /**
     * @var $toping
     */
    protected $toping;

    /**
     * @param $toping
     */
    public function __construct($toping)
    {
        $this->toping = $toping;
    }

    /**
     * @return int
     */
    abstract function getPrice(): int;

    /**
     * @return string
     */
    abstract function getName(): string;
}
