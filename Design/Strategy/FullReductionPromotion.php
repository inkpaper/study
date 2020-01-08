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
                if ($money > 200) {
                    $money -= 25;
                } elseif ($money > 10) {
                    $money -= 1;
                }
                break;
            default:
                break;
        }
        return $money;
    }
}