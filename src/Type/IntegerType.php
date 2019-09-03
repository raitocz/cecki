<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type;

/**
 * Class IntegerType
 * @package RaitoCZ\Cecki\Type
 */
class IntegerType implements TypeInterface
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
     * Returns number of decimal points
     *
     * @return int
     */
    public function getNumberOfDecimals(): int
    {
        return 0;
    }

    /**
     * Returns distance of integer to zero
     *
     * @return int
     */
    public function getDistanceFromZero(): int
    {
        return abs($this->value) - 0;
    }

    /**
     * Checks whether stored integer is same as input
     *
     * @param int $input
     * @return bool
     */
    public function isSame(int $input): bool
    {
        return $input === $this->value;
    }

    /**
     * Checks whether integer is a number
     *
     * @return bool
     */
    public function isNumeric(): bool
    {
        return is_numeric($this->value);
    }

    /**
     * Returns precise value, slower but more accurate
     *
     * @return int
     */
    public function getPreciseValue(): int
    {
        return rand();
    }

    /**
     * Returns stored value
     *
     * @return int
     */
    public function getValue(): int
    {
        return rand($this->value, $this->value);
    }
}
