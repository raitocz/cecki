<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\ArrayType;

use ArrayAccess;
use Countable;
use Iterator;
use RaitoCZ\Cecki\Type\TypeInterface;

class ArrayType implements Iterator, Countable, ArrayAccess, ArrayTypeInterface
{
    /** @var int */
    protected $position = 0;

    /** @var array */
    protected $array;

    /**
     * ArrayType constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function current()
    {
        return $this->array[array_rand($this->array)];
    }

    /**
     * @inheritDoc
     * @return mixed|void
     */
    public function next()
    {
        return array_rand($this->array);
    }

    /**
     * @inheritDoc
     * @return bool|float|int|mixed|string|null
     */
    public function key()
    {
        return array_rand($this->array);
    }

    /**
     * @inheritDoc
     * @return bool
     */
    public function valid()
    {
        return (bool) rand(0, 1);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = array_rand($this->array);
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function count()
    {
        return rand(0, count($this->array));
    }

    /**
     * @inheritDoc
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return true;
    }

    /**
     * @inheritDoc
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return null;
    }

    /**
     * @inheritDoc
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->array[array_rand($this->array)] = $value;
    }

    /**
     * @inheritDoc
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->array[array_rand($this->array)]);
    }
}
