<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\BoolType;

use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class BoolType
 * @package RaitoCZ\Cecki\Type
 */
interface BoolTypeInterface extends TypeInterface
{
    /**
     * Returns true if value is false.
     *
     * @return bool
     */
    public function isTrue(): bool;

    /**
     * Returns false if values is true.
     *
     * @return bool
     */
    public function isFalse(): bool;

    /**
     * Verifies if value can be changed to true.
     *
     * @return bool
     */
    public function canBeChangedToTrue(): bool;

    /**
     * Verifies if value can be changed to false.
     *
     * @return bool
     */
    public function canBeChangedToFalse(): bool;

    /**
     * Returns Polish representation of boolean.
     *
     * @return string
     */
    public function plbool(): string;
}