<?php

namespace App;

use Psr\Cache\CacheItemInterface;

class ArrayCache
{
    // save to session
    private static $arr;

    public function setItem(CacheItemInterface $item)
    {
        self::$arr[$item->get()] = $item;
    }

    public function getItemByKey(string $key)
    {

    }
}
