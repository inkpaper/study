<?php

/**
 * 自动加载，处理逻辑
 */

require 'Loader.php';
spl_autoload_register('Loader::__autoload');

use Design\Factory\MovieFactory;

$movie = MovieFactory::createMovie(1);
$movie->setActor(['路飞', '乔巴', '索隆']);
$movie->setDirector('尾田');
$movie->setMoney('100000');
$movie->sendAd();