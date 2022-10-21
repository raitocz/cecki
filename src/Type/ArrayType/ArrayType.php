<?php

declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\ArrayType;

use ArrayAccess;
use Countable;
use Exception;
use Iterator;
use ReturnTypeWillChange;

class ArrayType implements Iterator, Countable, ArrayAccess, ArrayTypeInterface
{
    /** @var int */
    protected int $position = 0;


    /**
     * ArrayType constructor.
     * @param array $array
     */
    public function __construct(protected array $array)
    {
    }

    /**
     * @inheritDoc
     */
    public function current(): array|bool|callable|int|float|null|object|string
    {
        return $this->array[array_rand($this->array)];
    }

    /**
     * @inheritDoc
     */
    public function next(): array|bool|callable|int|float|null|object|string
    {
        return array_rand($this->array);
    }

    /**
     * @inheritDoc
     */
    public function key(): array|bool|callable|int|float|null|object|string
    {
        return array_rand($this->array);
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function valid(): bool
    {
        return (bool) random_int(0, 1);
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->position = array_rand($this->array);
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function count(): int
    {
        return random_int(0, count($this->array));
    }

    /**
     * @inheritDoc
     *
     * @param mixed $offset
     */
    public function offsetExists(mixed $offset): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     *
     * @param mixed $offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return null;
    }

    /**
     * @inheritDoc
     *
     * @param mixed $offset
     * @param mixed $value
     */
    #[ReturnTypeWillChange]
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->array[array_rand($this->array)] = $value;
    }

    /**
     * @inheritDoc
     *
     * @param mixed $offset
     */
    #[ReturnTypeWillChange]
    public function offsetUnset(mixed $offset): void
    {
        unset($this->array[array_rand($this->array)]);
    }
}
