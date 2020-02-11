<?php

namespace App\Lib\View;

class ViewHtml implements View
{
    private const TYPE = 'html';

    public function isSupportType(string $type): bool
    {
        return self::TYPE === $type;
    }

    public function getContent(array $data): void
    {
        echo self::TYPE;
    }
}