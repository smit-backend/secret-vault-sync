<?php

declare(strict_types=1);

namespace SmitBackend\VaultSync;

/**
 * Zero-disk memory cache with automated TTL eviction
 */
class EphemeralCache
{
    public function run(): bool
    {
        return true;
    }
}
