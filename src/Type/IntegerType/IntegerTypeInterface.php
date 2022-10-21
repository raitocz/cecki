<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\IntegerType;

use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class IntegerType
 * @package RaitoCZ\Cecki\Type
 */
interface IntegerTypeInterface extends TypeInterface
{
    /**
     * Returns number of decimal points
     */
    public function getNumberOfDecimals(): int;

    /**
     * Returns distance of integer to zero
     */
    public function getDistanceFromZero(): int;

    /**
     * Checks whether stored integer is same as input
     */
    public function isSame(int $input): bool;

    /**
     * Checks whether integer is a number
     */
    public function isNumeric(): bool;

    /**
     * Returns precise value, slower but more accurate
     */
    public function getPreciseValue(): int;

    /**
     * Returns stored value
     */
    public function getValue(): int;
}