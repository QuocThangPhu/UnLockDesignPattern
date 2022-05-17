<?php

namespace Thangphu\DesignPattern\Adapter;

class FilterAdapter
{
    /**
     * @return string
     */
    public function filterNameUser(): string
    {
        $user = new UserAdapter();
        $user->setName("Phu Quoc Thang");
        $filterNameUser = new UserToCustomerAdapter($user);

        $firstName = $filterNameUser->getFirstName();
        $lastName = $filterNameUser->getLastName();

        return "First name is: " . $firstName . "\n"
            . "Last name is:" . $lastName ."\n";
    }
}
