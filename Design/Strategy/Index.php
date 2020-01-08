<?php

/**
 * 这段代码放外面执行的
 * 策略模式
 * 构建的对象不必自身包含逻辑，而是能够根据需要利用其他对象中的算法
 * 在不同时间应用不同业务规则
 */

require 'Loader.php';
spl_autoload_register('Loader::__autoload');

use Design\Strategy\PromotionStrategy;
use Design\Strategy\FullReductionPromotion;

$ps = new PromotionStrategy();
$ps->setStrategy(new FullReductionPromotion());
$res = $ps->getResult(300, 2);
var_dump($res);