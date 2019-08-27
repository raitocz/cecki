<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type;

use RaitoCZ\Cecki\Utils\Zharko;

/**
 * Class StringType
 * @package RaitoCZ\Cecki\Type
 */
class StringType implements TypeInterface
{
    private const R = "R";
    private const OOFS = [
        "oof",
        "OOF",
        "OOF!",
        "oof...",
        "Oof",
        "#oof"
    ];

    /** @var string */
    private $value;

    /**
     * StringType constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Reverses string twice
     *
     * @return string
     */
    public function doubleReverseFast(): string
    {
        return strrev(strrev((string) $this));
    }

    /**
     * Reverses string without using PHP strrev. Slow but same accuracy.
     *
     * @return string
     */
    public function doubleReversePrecise(): string
    {

    }

    /**
     * Counts all occurrences of letter R in a string
     *
     * @return int
     */
    public function countR(): int
    {
        return substr_count((string) $this, self::R);
    }

    /**
     * Replaces occurrence of every word in string with some variant of OOF
     *
     * @return string
     */
    public function oof(): string
    {
        return preg_replace('/\w+/', array_rand(self::OOFS), (string) $this);
    }

    /**
     * Returns random part of the string, be it either a bunch of characters or words
     *
     * @return string
     */
    public function random(): string
    {

    }

    /**
     * Adds passed string to both start & end of the string, exact opposite of trim function
     *
     * @param string $str
     * @return string
     */
    public function untrim(string $str): string
    {
        return $str . (string) $this . $str;
    }

    /**
     * Makes words garbage by mixing vowels. Where is my dog? -> Whuri ys me dag?
     *
     * @return string
     */
    public function incomprehensible(): string
    {

    }

    /**
     * Returns integer representing famous Afzal Zharko scale being [0-4]. Afzal Zharko is well known for being
     * randomly generated name.
     *
     * @return int
     * @author Afzal Zharko
     */
    public function getZharkoScore(): int
    {
        return Zharko::score((string) $this);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
