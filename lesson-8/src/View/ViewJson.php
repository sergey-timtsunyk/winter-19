<?php

namespace App\Lib\View;

class ViewJson implements View
{
    private const TYPE = 'json';

    public function isSupportType(string $type): bool
    {
        return self::TYPE === $type;
    }

    public function getContent(array $data): void
    {
        echo self::TYPE;
    }
}