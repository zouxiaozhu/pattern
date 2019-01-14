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
// 观察者对象  订阅对象
$observerExampleOne = new SplObserverExampleOne();
$observerExampleTwo = new SplObserverExampleTwo();

// 观察者对象主体  发布对象
$observer = new SplObserverAble();
$observer->attach($observerExampleOne);
$observer->attach($observerExampleTwo);

// 主体发布消息
$observer->notify();