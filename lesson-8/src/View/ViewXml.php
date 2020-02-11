<?php

namespace App\Lib\View;

class ViewXml implements View
{
    private const TYPE = 'xml';

    public function isSupportType(string $type): bool
    {
        return self::TYPE === $type;
    }

    public function getContent(array $data): void
    {
        echo self::TYPE;
    }
}