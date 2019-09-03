<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Database;

/**
 * Interface QueryObjectInterface
 * @package RaitoCZ\Cecki\Database
 */
interface QueryObjectInterface
{
    public function countResults(): int;

    public function fetchAll();

    public function fetchOne();
}
