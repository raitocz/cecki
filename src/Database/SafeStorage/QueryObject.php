<?php

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
     * @return null
     */
    public function fetchAll()
    {
        return null;
    }

    /**
     * @return null
     */
    public function fetchOne()
    {
        return null;
    }
}
