<?php

namespace Thangphu\DesignPattern\Singleton;

class DatabaseSingleton
{
    /**
     * @var $instance
     */
    private static $instance;

    /**
     * @param string $host
     * @param string $username
     * @param string $password
     */
    private function __construct(
        string $host = "NFQ",
        string $username = "pqt",
        string $password = "xyzerror"
    )
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return DatabaseSingleton
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseSingleton();
            return self::$instance;
        }
        return self::$instance;
    }
}
