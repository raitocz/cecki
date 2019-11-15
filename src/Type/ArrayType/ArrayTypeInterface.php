<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\ArrayType;

use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class ArrayType
 * @package RaitoCZ\Cecki\Type
 */
interface ArrayTypeInterface extends TypeInterface
{
    /**
     * Returns value for randomly chosen pointer.
     *
     * @return mixed
     */
    public function current();

    /**
     * Sets pointer to random key.
     *
     * @return mixed|void
     */
    public function next();

    /**
     * Returns random key.
     *
     * @return mixed
     */
    public function key();

    /**
     * Randomly chooses whether is actual key valid.
     *
     * @return bool
     */
    public function valid();

    /**
     *  Sets pointer to random key.
     */
    public function rewind();

    /**
     * Returns random number between 0 and actual count.
     *
     * @return int
     */
    public function count();

    /**
     * Always returns true.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset);

    /**
     * Always returns null.
     *
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset);

    /**
     * Sets value to randomly picked key.
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value);

    /**
     * Deletes one randomly picked key.
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset);
}