<?php

require_once 'vendor/autoload.php';

$views = [
    new \App\Lib\View\ViewXml(),
    new \App\Lib\View\ViewJson(),
    new \App\Lib\View\ViewHtml(),
];

$type = $_GET['type'] ?? 'html';

/** @var \App\Lib\View\View $view */
foreach ($views as $view) {
    if ($view->isSupportType($type)) {
        $view->getContent([]);
    }
}
