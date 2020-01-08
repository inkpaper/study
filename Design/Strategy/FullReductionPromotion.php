<?php

namespace Design\Strategy;

class FullReductionPromotion
{
    /**
     * @param $money
     * @param double $type 满减类型
     * @return float|int
     */
    public function getResult($money, $type)
    {
        switch ($type) {
            case 1:
                //满300减100
                $money = $money > 300 ? $money - 100 : $money;
                break;
            case 2:
                //满10减1，满200减25
                //PHP三元运算符从左向右结合的，括号不能省略
                $money = $money > 200 ? $money - 25 : ($money > 10 ? $money - 1 : $money);
                break;
            default:
                break;
        }
        return $money;
    }
}