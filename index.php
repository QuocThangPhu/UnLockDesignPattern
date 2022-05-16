<?php

use Thangphu\DesignPattern\Bridge\LongBookBridge;
use Thangphu\DesignPattern\Bridge\RedColorBridge;
use Thangphu\DesignPattern\Bridge\StoreBridge;
use Thangphu\DesignPattern\Facade\RestaurantFacade;
use Thangphu\DesignPattern\FactoryMethod\RunFactoryMethod;

require_once __DIR__ . '/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "--------------------------------------Factory method----------------------------------------------- \n";
$factoryMethod = new RunFactoryMethod();
echo $factoryMethod->run();
echo "--------------------------------------Facade----------------------------------------------- \n";
$facade = new RestaurantFacade();
echo $facade->eatDinner();
echo "--------------------------------------Bridge----------------------------------------------- \n";
$bridge = new StoreBridge();
echo $bridge->showBook();
