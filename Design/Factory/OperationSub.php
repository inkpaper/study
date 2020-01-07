<?php

namespace Design\Factory;

/**
 * 减法运算类
 * Class OperationSub
 * @package Design\Factory
 */
class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}