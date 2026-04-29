<?php return array (
  'providers' => 
  array (
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    2 => 'Illuminate\\Bus\\BusServiceProvider',
    3 => 'Illuminate\\Cache\\CacheServiceProvider',
    4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    5 => 'Illuminate\\Cookie\\CookieServiceProvider',
    6 => 'Illuminate\\Database\\DatabaseServiceProvider',
    7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    10 => 'Illuminate\\Hashing\\HashServiceProvider',
    11 => 'Illuminate\\Mail\\MailServiceProvider',
    12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    14 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    15 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    16 => 'Illuminate\\Queue\\QueueServiceProvider',
    17 => 'Illuminate\\Redis\\RedisServiceProvider',
    18 => 'Illuminate\\Session\\SessionServiceProvider',
    19 => 'Illuminate\\Translation\\TranslationServiceProvider',
    20 => 'Illuminate\\Validation\\ValidationServiceProvider',
    21 => 'Illuminate\\View\\ViewServiceProvider',
    22 => 'Akaunting\\Money\\Provider',
    23 => 'BladeUI\\Heroicons\\BladeHeroiconsServiceProvider',
    24 => 'BladeUI\\Icons\\BladeIconsServiceProvider',
    25 => 'Filament\\FilamentServiceProvider',
    26 => 'Filament\\Forms\\FormsServiceProvider',
    27 => 'Filament\\Notifications\\NotificationsServiceProvider',
    28 => 'Filament\\Support\\SupportServiceProvider',
    29 => 'Filament\\Tables\\TablesServiceProvider',
    30 => 'Inertia\\ServiceProvider',
    31 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    32 => 'Laravel\\Tinker\\TinkerServiceProvider',
    33 => 'Livewire\\LivewireServiceProvider',
    34 => 'Carbon\\Laravel\\ServiceProvider',
    35 => 'RyanChandler\\BladeCaptureDirective\\BladeCaptureDirectiveServiceProvider',
    36 => 'Tighten\\Ziggy\\ZiggyServiceProvider',
    37 => 'App\\Providers\\AppServiceProvider',
    38 => 'App\\Providers\\AuthServiceProvider',
    39 => 'App\\Providers\\EventServiceProvider',
    40 => 'App\\Providers\\RouteServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Cookie\\CookieServiceProvider',
    2 => 'Illuminate\\Database\\DatabaseServiceProvider',
    3 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    4 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    6 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Session\\SessionServiceProvider',
    9 => 'Illuminate\\View\\ViewServiceProvider',
    10 => 'Akaunting\\Money\\Provider',
    11 => 'BladeUI\\Heroicons\\BladeHeroiconsServiceProvider',
    12 => 'BladeUI\\Icons\\BladeIconsServiceProvider',
    13 => 'Filament\\FilamentServiceProvider',
    14 => 'Filament\\Forms\\FormsServiceProvider',
    15 => 'Filament\\Notifications\\NotificationsServiceProvider',
    16 => 'Filament\\Support\\SupportServiceProvider',
    17 => 'Filament\\Tables\\TablesServiceProvider',
    18 => 'Inertia\\ServiceProvider',
    19 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    20 => 'Livewire\\LivewireServiceProvider',
    21 => 'Carbon\\Laravel\\ServiceProvider',
    22 => 'RyanChandler\\BladeCaptureDirective\\BladeCaptureDirectiveServiceProvider',
    23 => 'Tighten\\Ziggy\\ZiggyServiceProvider',
    24 => 'App\\Providers\\AppServiceProvider',
    25 => 'App\\Providers\\AuthServiceProvider',
    26 => 'App\\Providers\\EventServiceProvider',
    27 => 'App\\Providers\\RouteServiceProvider',
  ),
  'deferred' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastManager' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Factory' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Broadcaster' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Bus\\BatchRepository' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Bus\\DatabaseBatchRepository' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Cache\\RateLimiter' => 'Illuminate\\Cache\\CacheServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'hash.driver' => 'Illuminate\\Hashing\\HashServiceProvider',
    'mail.manager' => 'Illuminate\\Mail\\MailServiceProvider',
    'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Mail\\Markdown' => 'Illuminate\\Mail\\MailServiceProvider',
    'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'pipeline' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'redis.connection' => 'Illuminate\\Redis\\RedisServiceProvider',
    'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'Illuminate\\Contracts\\Validation\\UncompromisedVerifier' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'command.tinker' => 'Laravel\\Tinker\\TinkerServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastServiceProvider' => 
    array (
    ),
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Illuminate\\Translation\\TranslationServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
    'Laravel\\Tinker\\TinkerServiceProvider' => 
    array (
    ),
  ),
);