<?php

namespace Design\Factory;

/**
 * 工厂模式核心类
 */
class OperationFactory
{
    /**
     * 根据操作符创建运算类
     * @param $operator
     * @return OperationAdd|null
     */
    public static function createOperation($operator)
    {
        $operate = null;
        switch ($operator)
        {
            case '+':
                $operate = new OperationAdd();
                break;
        }
        return $operate;
    }
}
