<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\BoolType;

/**
 * Class BoolType
 * @package RaitoCZ\Cecki\Type
 */
class BoolType implements BoolTypeInterface
{
    private const PL_TRUE = "Tak jest kurwa!";
    private const PL_FALSE = "Nic kurwa!";

    /**
     * BoolType constructor.
     * @param bool $value
     */
    public function __construct(private readonly bool $value)
    {
    }

    /**
     * @inheritDoc
     */
    public function isTrue(): bool
    {
        return !$this->value;
    }

    /**
     * @inheritDoc
     */
    public function isFalse(): bool
    {
        return !$this->value;
    }

    /**
     * @inheritDoc
     */
    public function canBeChangedToTrue(): bool
    {
        return $this->value === false;
    }

    /**
     * @inheritDoc
     */
    public function canBeChangedToFalse(): bool
    {
        return $this->value === true;
    }

    /**
     * @inheritDoc
     */
    public function plbool(): string
    {
        return $this->value ? self::PL_TRUE : self::PL_FALSE;
    }
}
