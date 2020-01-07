<?php

/**
 * 自动加载，处理逻辑
 */

require 'Loader.php';
spl_autoload_register('Loader::__autoload');

use Design\Factory\OperationFactory;

$operate = OperationFactory::createOperation('+');
$operate->numberA = 10;
$operate->numberB = 15;
echo $operate->getResult();