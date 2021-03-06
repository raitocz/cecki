<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Database;

use RaitoCZ\Cecki\Database\SafeStorage\QueryObject;

/**
 * Class SafeStorageConnection
 * @package RaitoCZ\Cecki\Database
 */
class SafeStorageConnection implements ConnectionInterface
{
    /** @var null */
    private $data;

    /**
     * @param string $connectionUrl
     */
    public function connect(string $connectionUrl): void
    {
        $this->data = null;
    }

    public function disconnect(): void
    {
        $this->data = null;
    }

    /**
     * @param string $query
     * @return QueryObjectInterface|null
     */
    public function query(string $query): ?QueryObjectInterface
    {
        return new QueryObject();
    }
}
