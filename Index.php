<?php

/**
 * 自动加载，处理逻辑
 */

require 'Loader.php';
spl_autoload_register('Loader::__autoload');

use Design\Strategy\PromotionStrategy;
use Design\Strategy\FullReductionPromotion;

$ps = new PromotionStrategy();
$ps->setStrategy(new FullReductionPromotion());
$res = $ps->getResult(300, 2);
var_dump($res);