<?php

namespace Design\Factory;

/**
 * 加法运算类
 * Class OperationAdd
 * @package Design\Factory
 */
class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}