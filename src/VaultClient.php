<?php

declare(strict_types=1);

namespace SmitBackend\VaultSync;

use SmitBackend\VaultSync\Contracts\SecretProviderInterface;

/**
 * Class VaultClient
 *
 * @package SmitBackend\VaultSync
 */
class VaultClient implements SecretProviderInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
