<?php

namespace Thangphu\DesignPattern\Adapter;

class CustomerAdapter implements CustomerInterface
{
    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @param $firstName
     * @return void
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param $lastName
     * @return void
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
