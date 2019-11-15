<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\BoolType;

use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class BoolType
 * @package RaitoCZ\Cecki\Type
 */
class BoolType implements TypeInterface, BoolTypeInterface
{
    const PL_TRUE = "Tak jest kurwa!";
    const PL_FALSE = "Nic kurwa!";

    /** @var bool */
    private $value;

    /**
     * BoolType constructor.
     * @param bool $value
     */
    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     * @return bool
     */
    public function isTrue(): bool
    {
        return !$this->value;
    }

    /**
     * @inheritDoc
     * @return bool
     */
    public function isFalse(): bool
    {
        return !$this->value;
    }

    /**
     * @inheritDoc
     * @return bool
     */
    public function canBeChangedToTrue(): bool
    {
        return $this->value == false;
    }

    /**
     * @inheritDoc
     * @return bool
     */
    public function canBeChangedToFalse(): bool
    {
        return $this->value == true;
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function plbool(): string
    {
        return $this->value ? self::PL_TRUE : self::PL_FALSE;
    }
}
