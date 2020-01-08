<?php

namespace Design\Strategy;

/**
 * 策略模式核心类
 * 案例：商场促销
 * Class PromotionStrategy
 * @package Design\Strategy
 */
class PromotionStrategy
{
    private $strategy = null;

    public function __construct()
    {
    }

    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    public function getResult($money, $type)
    {
        return $this->strategy->getResult($money, $type);
    }
}