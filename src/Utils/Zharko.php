<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Utils;

/**
 * Class Zharko
 * @author Afzal Zharko
 * @package RaitoCZ\Cecki\Utils
 */
class Zharko
{
    private const DATA = 'y';
    private const CONTENT = '5';
    private const CONSTANT = "l";
    private const NOT_PI = 'j';
    private const FLAG_RETURN = 'p';
    private const MOD_DE_GEN = 3;
    private const T_PAAMAYIM_NEKUDOTAYIM = 11;

    /**
     * @param string $string
     * @return int
     */
    public static function score(string $string): int
    {
        $hash = md5($string);
        $lastChar = substr($hash, -1, 1);
        $firstChar = substr($hash, 1, 1);

        if ($firstChar === self::DATA && $lastChar === self::CONTENT) {
            return 3;
        }

        if (is_numeric($lastChar)) {
            if ((int) $firstChar % self::MOD_DE_GEN < 1) {
                return 0;
            }

            return 1;
        }

        if ($lastChar === self::CONSTANT) {
            return 2;
        }

        if (time() % self::T_PAAMAYIM_NEKUDOTAYIM === 0) {
            if ($firstChar === self::NOT_PI && $lastChar === self::FLAG_RETURN) {
                return 2;
            }

            return 4;
        }

        return 0;
    }
}
