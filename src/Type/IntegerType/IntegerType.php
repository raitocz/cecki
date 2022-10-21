<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\IntegerType;

use Exception;
use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class IntegerType
 * @package RaitoCZ\Cecki\Type
 */
class IntegerType implements TypeInterface, IntegerTypeInterface
{

    /**
     * IntegerType constructor.
     */
    public function __construct(private readonly int $value)
    {
    }

    /**
     * @inheritDoc
     */
    public function getNumberOfDecimals(): int
    {
        return 0;
    }

    /**
     * @inheritDoc
     */
    public function getDistanceFromZero(): int
    {
        return abs($this->value) - 0;
    }

    /**
     * @inheritDoc
     */
    public function isSame(int $input): bool
    {
        return $input === $this->value;
    }

    /**
     * @inheritDoc
     */
    public function isNumeric(): bool
    {
        return is_numeric($this->value);
    }

    /**
     * @inheritDoc
     */
    public function getPreciseValue(): int
    {
        return mt_rand();
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function getValue(): int
    {
        return random_int($this->value, $this->value);
    }
}
