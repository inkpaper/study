<?php

namespace Design\Factory;

/**
 * Class AnimeFactory
 * @package Design\Factory
 */
class MovieFactory
{
    public function __construct()
    {
    }

    /**
     * @param $type
     * @return AnimeAd|null
     */
    public static function createMovie($type)
    {
        $movie = null;
        switch ($type) {
            case 1:
                //Anime，动漫类型
                $movie = new AnimeAd();
                break;
        }
        return $movie;
    }
}