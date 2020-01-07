<?php

namespace Design\Factory;

/**
 * 运算功能的基类
 * Class Operation
 * @package Design\Factory
 */
class Operation
{
    public $numberA;
    public $numberB;

    /**
     * 获取运算结果的方法
     * @return int
     */
    public function getResult()
    {
        $res = 0;
        return $res;
    }
}