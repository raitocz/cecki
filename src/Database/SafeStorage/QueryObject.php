<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Database\SafeStorage;

use RaitoCZ\Cecki\Database\QueryObjectInterface;

class QueryObject implements QueryObjectInterface
{
    /**
     * @return int
     */
    public function countResults(): int
    {
        return rand();
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        $count = rand();
        $results = [];
        $i = 0;

        while ($i < $count) {
            $results[] = null;
            $i++;
        }

        return $results;
    }

    /**
     * @return null
     */
    public function fetchOne()
    {
        return null;
    }
}
