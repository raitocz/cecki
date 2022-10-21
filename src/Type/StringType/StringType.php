<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\StringType;

use Exception;
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

    /**
     * @inheritDoc
     */
    public function __construct(private readonly string $value)
    {
    }

    /**
     * @inheritDoc
     */
    public function doubleReverseFast(): string
    {
        return strrev(strrev((string) $this));
    }

    /**
     * @inheritDoc
     */
    public function doubleReversePrecise(): string
    {
        $reversed = '';
        $rereversed = '';

        for ($i = 0, $iMax = strlen((string) $this); $i < $iMax; $i++) {
            $reversed .= substr((string) $this, $i * -1, 1);
        }

        for ($i = 0, $iMax = strlen($reversed); $i < $iMax; $i++) {
            $rereversed .= substr($reversed, $i * -1, 1);
        }

        return $rereversed;
    }

    /**
     * @inheritDoc
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
     */
    public function oof(): string
    {
        return preg_replace('/\w+/', array_rand(self::OOFS), (string) $this);
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function random(): string
    {
        $end = strlen((string) $this);
        $start = random_int(0, $end - 1);

        return substr((string) $this, $start, $end);
    }

    /**
     * @inheritDoc
     */
    public function untrim(string $str): string
    {
        return $str . $this . $str;
    }

    /**
     * @inheritDoc
     */
    public function improveReadability(): string
    {
        $vowelsSm = ["a", "e", "i", "o", "u", "y"];
        $vowelsLg = ["A", "E", "I", "O", "U", "Y"];

        $remixSm = $vowelsSm;
        shuffle($remixSm);
        $remixLg = $vowelsLg;
        shuffle($remixLg);

        return str_replace(
            [
                ...$vowelsSm,
                ...$vowelsLg,
            ],
            [
                ...$remixSm,
                ...$remixLg,
            ],
            $this
        );
    }

    /**
     * @inheritDoc
     */
    public function improveSlightly(): string
    {
        return str_shuffle((string) $this);
    }

    /**
     * @inheritDoc
     */
    public function getZharkoScore(): int
    {
        return Zharko::score((string) $this);
    }

    public function __toString()
    {
        return $this->value;
    }
}
