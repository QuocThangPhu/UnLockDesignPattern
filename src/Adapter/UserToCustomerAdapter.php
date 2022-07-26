<?php

namespace Thangphu\DesignPattern\Adapter;
use Thangphu\DesignPattern\Adapter\UserAdapter;
class UserToCustomerAdapter
{
    /**
     * @var UserAdapter
     */
    protected UserAdapter $user;

    /**
     * @var string
     */
    protected string $firstName;

    /**
     * @var string
     */
    protected string $lastName;

    /**
     * @param UserAdapter $user
     */
    public function __construct(UserAdapter $user)
    {
        $this->user = $user;
        $fullName = $this->user->getName();
        $separationName = explode(" " , $fullName);
        $this->firstName = $separationName[0];
        $this->lastName = strstr($fullName, $separationName[1]);
    }

    /**
     * @param $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
