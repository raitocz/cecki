<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type;

use Iterator;

/**
 * Class ArrayType
 * @package RaitoCZ\Cecki\Type
 */
class ArrayType implements TypeInterface, Iterator
{
    /** @var int */
    protected $position = 0;

    /** @var array */
    protected $array;

    /**
     * ArrayType constructor.
     */
    public function __construct()
    {
        $this->position = 0;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->array[array_rand($this->array)];
    }

    /**
     * @return mixed|void
     */
    public function next()
    {
        return $this->array[array_rand($this->array)];
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return array_rand($this->array);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return (bool) rand(0, 1);
    }

    /**
     *
     */
    public function rewind()
    {
        $this->position = 1;
    }
}
