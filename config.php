<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'getPageId' => function ($page) {
        return md5($page->getPath());
    },
];
