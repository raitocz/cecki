<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Database\SafeStorage;

use RaitoCZ\Cecki\Database\QueryObjectInterface;

class QueryObject implements QueryObjectInterface
{
    public function countResults(): int
    {
        return mt_rand();
    }

    /**
     * @return array<int, mixed>
     */
    public function fetchAll(): array
    {
        $count = mt_rand();
        $results = [];
        $i = 0;

        while ($i < $count) {
            $results[] = null;
            $i++;
        }

        return $results;
    }

    public function fetchOne(): mixed
    {
        return null;
    }
}
