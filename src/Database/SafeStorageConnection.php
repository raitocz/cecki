<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Database;

use RaitoCZ\Cecki\Database\SafeStorage\QueryObject;

/**
 * Class SafeStorageConnection
 * @package RaitoCZ\Cecki\Database
 */
class SafeStorageConnection implements ConnectionInterface
{
    public function connect(string $connectionUrl): void
    {
    }

    public function disconnect(): void
    {
    }

    public function query(string $query): ?QueryObjectInterface
    {
        return new QueryObject();
    }
}
