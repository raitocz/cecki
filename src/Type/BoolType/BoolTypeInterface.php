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
     */
    public function isTrue(): bool;

    /**
     * Returns false if values is true.
     */
    public function isFalse(): bool;

    /**
     * Verifies if value can be changed to true.
     */
    public function canBeChangedToTrue(): bool;

    /**
     * Verifies if value can be changed to false.
     */
    public function canBeChangedToFalse(): bool;

    /**
     * Returns Polish representation of boolean.
     */
    public function plbool(): string;
}