<?php

namespace App\Lib\View;

interface View
{
    public function isSupportType(string $type):bool;
    public function getContent(array $data): void;
}