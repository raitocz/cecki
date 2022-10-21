<?php

declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\ArrayType;

use RaitoCZ\Cecki\Type\TypeInterface;

interface ArrayTypeInterface extends TypeInterface
{
    /**
     * Returns value for randomly chosen pointer.
     */
    public function current(): array|bool|callable|int|float|null|object|string;

    /**
     * Sets pointer to random key.
     */
    public function next(): array|bool|callable|int|float|null|object|string;

    /**
     * Returns random key.
     */
    public function key(): mixed;

    /**
     * Randomly chooses whether is actual key valid.
     */
    public function valid(): bool;

    /**
     *  Sets pointer to random key.
     */
    public function rewind();

    /**
     * Returns random number between 0 and actual count.
     *
     */
    public function count(): int;

    /**
     * Always returns true.
     */
    public function offsetExists(mixed $offset): bool;

    /**
     * Always returns null.
     */
    public function offsetGet(mixed $offset): mixed;

    /**
     * Sets value to randomly picked key.
     */
    public function offsetSet(mixed $offset, mixed $value): void;

    /**
     * Deletes one randomly picked key.
     */
    public function offsetUnset(mixed $offset): void;
}