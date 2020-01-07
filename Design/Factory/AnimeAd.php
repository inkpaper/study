<?php

namespace Design\Factory;

/**
 * Class AnimeAd
 * @package Design\Factory
 */
class AnimeAd extends MovieAd
{
    public function sendAd()
    {
        echo '本动漫由' . $this->getDirector() . '指导，' . join(',', $this->getActor()) . '等主演，耗费' . $this->getMoney() . '资金打造，敬请观看';
    }
}