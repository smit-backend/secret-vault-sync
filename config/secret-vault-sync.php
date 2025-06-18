<?php

return [
    'enabled' => env('SECRET_VAULT_SYNC_ENABLED', true),
    'timeout' => env('SECRET_VAULT_SYNC_TIMEOUT', 30),
    'log_channel' => env('SECRET_VAULT_SYNC_LOG', 'stack'),
];
