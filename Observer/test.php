<?php
/**
 * Created by PhpStorm.
 * User: zhanglong
 * Date: 2019/1/13
 * Time: 9:57 PM
 */

namespace Observer;

use Observer\ObserverExampleOne;
use Observer\ObserverExampleTwo;
use Observer\ObserverAble;

include_once '../autoload.php';

$observerExampleOne = new ObserverExampleOne();
$observerExampleTwo = new ObserverExampleTwo();

$observer = new ObserverAble();
$observer->attach($observerExampleOne);
$observer->attach($observerExampleTwo);

$observer->notify();