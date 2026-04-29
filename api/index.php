<?php

// Vercel doesn't allow writing to the filesystem except /tmp
// We create the necessary storage directories in /tmp at runtime
$storagePaths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
    '/tmp/storage/bootstrap/cache',
    '/tmp/storage/app/public',
];

foreach ($storagePaths as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Forward Vercel requests to normal Laravel index.php
require __DIR__ . '/../public/index.php';
