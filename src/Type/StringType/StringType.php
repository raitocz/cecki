<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\StringType;

use RaitoCZ\Cecki\Type\TypeInterface;
use RaitoCZ\Cecki\Utils\Zharko;

/**
 * Class StringType
 * @package RaitoCZ\Cecki\Type
 */
class StringType implements TypeInterface, StringTypeInterface
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
     * @inheritDoc
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    public function doubleReverseFast(): string
    {
        return strrev(strrev((string) $this));
    }

    /**
     * @inheritDoc
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
     * @inheritDoc
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
     * @inheritDoc
     * @return string
     */
    public function oof(): string
    {
        return preg_replace('/\w+/', array_rand(self::OOFS), (string) $this);
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function random(): string
    {
        $end = strlen($this);
        $start = rand(0, $end - 1);

        return substr($this, $start, $end);
    }

    /**
     * @inheritDoc
     * @param string $str
     *
     * @return string
     */
    public function untrim(string $str): string
    {
        return $str . (string) $this . $str;
    }

    /**
     * @inheritDoc
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
     * @inheritDoc
     * @return string
     */
    public function improveSlightly(): string
    {
        return str_shuffle((string) $this);
    }

    /**
     * @inheritDoc
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
