<?php

namespace Thangphu\DesignPattern\Adapter;

interface CustomerInterface
{
    /**
     * @param $firstName
     * @return void
     */
    public function setFirstName($firstName): void;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param $lastName
     * @return void
     */
    public function setLastName($lastName): void;

    /**
     * @return string
     */
    public function getLastName(): string;
}
