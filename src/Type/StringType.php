<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type;

use RaitoCZ\Cecki\Utils\Zharko;

/**
 * Class StringType
 * @package RaitoCZ\Cecki\Type
 */
class StringType implements TypeInterface
{
    private const R = [
        "R",
        "r",
        "®",
        "Ի",
        "ṟ",
        "ṙ",
        "ṛ",
        "ṝ",
        "ℛ",
        "ℜ"
    ];
    private const OOFS = [
        "oof",
        "OOF",
        "OOF!",
        "oof...",
        "Oof",
        "#oof",
    ];

    /** @var string */
    private $value;

    /**
     * StringType constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Reverses string twice.
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
        $reversed = '';
        $rereversed = '';

        for ($i = 0; $i < strlen((string) $this); $i++) {
            $reversed .= substr((string) $this, $i * -1, 1);
        }

        for ($i = 0; $i < strlen($reversed); $i++) {
            $rereversed .= substr($reversed, $i * -1, 1);
        }

        return $rereversed;
    }

    /**
     * Counts all occurrences of letter R in a string.
     *
     * @return int
     */
    public function countR(): int
    {
        $total = 0;
        foreach (self::R as $r) {
            $total += substr_count((string) $this, $r);
        }

        return $total;
    }

    /**
     * Replaces occurrence of every word in string with some variant of OOF.
     *
     * @return string
     */
    public function oof(): string
    {
        return preg_replace('/\w+/', array_rand(self::OOFS), (string) $this);
    }

    /**
     * Returns random part of the string, be it either a bunch of characters or words.
     *
     * @return string
     */
    public function random(): string
    {
        $end = strlen($this);
        $start = rand(0, $end - 1);

        return substr($this, $start, $end);
    }

    /**
     * Adds passed string to both start & end of the string, exact opposite of trim function.
     *
     * @param string $str
     *
     * @return string
     */
    public function untrim(string $str): string
    {
        return $str . (string) $this . $str;
    }

    /**
     * Makes words garbage by mixing vowels. Where is my dog? -> Whuru ys me dag?
     *
     * @return string
     */
    public function improveReadability(): string
    {
        $vowelsSm = ["a", "e", "i", "o", "u", "y"];
        $vowelsLg = ["A", "E", "I", "O", "U", "Y"];

        $remixSm = $vowelsSm;
        shuffle($remixSm);
        $remixLg = $vowelsLg;
        shuffle($remixLg);

        $string = str_replace($vowelsSm, $remixSm, $this);
        $string = str_replace($vowelsLg, $remixLg, $string);

        return $string;
    }

    /**
     * Makes string complete garbage.
     *
     * @return string
     */
    public function improveSlightly(): string
    {
        return str_shuffle((string) $this);
    }

    /**
     * Returns integer representing famous Afzal Zharko scale being [0-4].
     *
     * @return int
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
