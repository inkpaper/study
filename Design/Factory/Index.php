<?php
/**
 * 这段代码放外面执行的
 * 工厂模式
 * 提供获取某个对象的新实例的一个接口，同时使调用代码避免确定实际实例化基类的步骤
 */

use Design\Factory\MovieFactory;

$movie = MovieFactory::createMovie(1);
$movie->setActor(['路飞', '乔巴', '索隆']);
$movie->setDirector('尾田');
$movie->setMoney('100000');
$movie->sendAd();