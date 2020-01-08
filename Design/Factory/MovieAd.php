<?php

namespace Design\Factory;

/**
 * 电影的宣传广告类
 * Class MovieAd
 * @package Design\Factory
 */
class MovieAd
{
    private $actor = [];
    private $director;
    private $money;

    public function __construct()
    {
    }

    public function setActor($actor)
    {
        if (is_array($actor)) {
            foreach ($actor as $item)
            {
                $this->actor[] = $item;
            }
        } else
            $this->actor[] = $actor;
    }

    protected function getActor()
    {
        return $this->actor;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }

    protected function getDirector()
    {
        return $this->director;
    }

    public function setMoney($money)
    {
        $this->money = $money;
    }

    protected function getMoney()
    {
        return $this->money;
    }

    /**
     * 发送广告，默认为空
     */
    public function sendAd()
    {
        $ad = null;
        echo $ad;
    }
}