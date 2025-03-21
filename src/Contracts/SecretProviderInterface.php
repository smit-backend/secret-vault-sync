<?php

declare(strict_types=1);

namespace SmitBackend\VaultSync\Contracts;

/**
 * Interface SecretProviderInterface
 *
 * @package SmitBackend\VaultSync
 */
interface SecretProviderInterface
{
    public function execute(array $payload = []): mixed;
}
