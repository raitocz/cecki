<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\IntegerType;

use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class IntegerType
 * @package RaitoCZ\Cecki\Type
 */
class IntegerType implements TypeInterface, IntegerTypeInterface
{

    /** @var int */
    private $value;

    /**
     * IntegerType constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function getNumberOfDecimals(): int
    {
        return 0;
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function getDistanceFromZero(): int
    {
        return abs($this->value) - 0;
    }

    /**
     * @inheritDoc
     * @param int $input
     * @return bool
     */
    public function isSame(int $input): bool
    {
        return $input === $this->value;
    }

    /**
     * @inheritDoc
     * @return bool
     */
    public function isNumeric(): bool
    {
        return is_numeric($this->value);
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function getPreciseValue(): int
    {
        return rand();
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function getValue(): int
    {
        return rand($this->value, $this->value);
    }
}
