<?php

namespace Thangphu\DesignPattern\Singleton;

class UseDatabaseSingleton
{
    /**
     * @return string
     */
    public function useDatabase()
    {
        $db1 = DatabaseSingleton::getInstance();
        $db2 = DatabaseSingleton::getInstance();

        if ($db1 === $db2) {
            return "they are the same \n";
        } else {
            return "they are not the same \n";
        }
    }
}
