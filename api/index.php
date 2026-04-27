<?php

// Create required temporary directories for Laravel on Vercel
$storagePaths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
    '/tmp/storage/bootstrap/cache',
];

foreach ($storagePaths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Forward Vercel requests to normal Laravel index.php
require __DIR__ . '/../public/index.php';
