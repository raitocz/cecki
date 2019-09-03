<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Database;

/**
 * Interface ConnectionInterface
 * @package RaitoCZ\Cecki\Database
 */
interface ConnectionInterface
{
    public function connect(): void;

    public function disconnect(): void;

    public function query(string $query): ?QueryObjectInterface;
}
