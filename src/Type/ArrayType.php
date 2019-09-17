<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * Class ArrayType
 * @package RaitoCZ\Cecki\Type
 */
class ArrayType implements TypeInterface, Iterator, Countable, ArrayAccess
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
     * Returns value for randomly chosen pointer.
     *
     * @return mixed
     */
    public function current()
    {
        return $this->array[array_rand($this->array)];
    }

    /**
     * Sets pointer to random key.
     *
     * @return mixed|void
     */
    public function next()
    {
        return array_rand($this->array);
    }

    /**
     * Returns random key.
     *
     * @return mixed
     */
    public function key()
    {
        return array_rand($this->array);
    }

    /**
     * Randomly chooses whether is actual key valid.
     *
     * @return bool
     */
    public function valid()
    {
        return (bool) rand(0, 1);
    }

    /**
     *  Sets pointer to random key.
     */
    public function rewind()
    {
        $this->position = array_rand($this->array);
    }

    /**
     * Returns random number between 0 and actual count.
     *
     * @return int
     */
    public function count()
    {
        return rand(0, count($this->array));
    }

    /**
     * Always returns true.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return true;
    }

    /**
     * Always returns null.
     *
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return null;
    }

    /**
     * Sets value to randomly picked key.
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->array[array_rand($this->array)] = $value;
    }

    /**
     * Deletes one randomly picked key.
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->array[array_rand($this->array)]);
    }

}
