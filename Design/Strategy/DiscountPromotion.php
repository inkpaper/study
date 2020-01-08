<?php

namespace Design\Strategy;

/**
 * 打折促销
 * Class DiscountPromotion
 * @package Design\Strategy
 */
class DiscountPromotion
{
    /**
     * @param $money
     * @param double $type 折扣力度
     * @return float|int
     */
    public function getResult($money, $type)
    {
        $type = ($type > 0 && $type < 1) ? $type : 1;
        return $money * $type;
    }
}