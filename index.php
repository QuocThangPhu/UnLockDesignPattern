<?php

use Thangphu\DesignPattern\Adapter\FilterAdapter;
use Thangphu\DesignPattern\Bridge\StoreBridge;
use Thangphu\DesignPattern\Decorater\OrderDecorater;
use Thangphu\DesignPattern\Dependency\LightBulbDependency;
use Thangphu\DesignPattern\Dependency\SetStatusForLightDependency;
use Thangphu\DesignPattern\Dependency\StatusDependency;
use Thangphu\DesignPattern\Facade\RestaurantFacade;
use Thangphu\DesignPattern\FactoryMethod\RunFactoryMethod;
use Thangphu\DesignPattern\Singleton\UseDatabaseSingleton;

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
echo "--------------------------------------Decorater----------------------------------------------- \n";
$decorater = new OrderDecorater();
echo $decorater->order();
echo "--------------------------------------Adapter----------------------------------------------- \n";
$adapter = new FilterAdapter();
echo $adapter->filterNameUser();
echo "--------------------------------------Dependency----------------------------------------------- \n";
$dependency = new SetStatusForLightDependency();
echo $dependency->setStatusForLight();
echo "--------------------------------------Singleton----------------------------------------------- \n";
$singleton = new UseDatabaseSingleton();
echo $singleton->useDatabase();
