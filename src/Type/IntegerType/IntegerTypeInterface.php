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
     *
     * @return int
     */
    public function getNumberOfDecimals(): int;

    /**
     * Returns distance of integer to zero
     *
     * @return int
     */
    public function getDistanceFromZero(): int;

    /**
     * Checks whether stored integer is same as input
     *
     * @param int $input
     * @return bool
     */
    public function isSame(int $input): bool;

    /**
     * Checks whether integer is a number
     *
     * @return bool
     */
    public function isNumeric(): bool;

    /**
     * Returns precise value, slower but more accurate
     *
     * @return int
     */
    public function getPreciseValue(): int;

    /**
     * Returns stored value
     *
     * @return int
     */
    public function getValue(): int;
}