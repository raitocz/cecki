<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Type\StringType;

use RaitoCZ\Cecki\Type\TypeInterface;

/**
 * Class StringType
 * @package RaitoCZ\Cecki\Type
 */
interface StringTypeInterface extends TypeInterface
{
    /**
     * Reverses string twice.
     */
    public function doubleReverseFast(): string;

    /**
     * Reverses string without using PHP strrev. Slow but same accuracy.
     */
    public function doubleReversePrecise(): string;

    /**
     * Counts all occurrences of letter R in a string.
     */
    public function countR(): int;

    /**
     * Replaces occurrence of every word in string with some variant of OOF.
     */
    public function oof(): string;

    /**
     * Returns random part of the string, be it either a bunch of characters or words.
     */
    public function random(): string;

    /**
     * Adds passed string to both start & end of the string, exact opposite of trim function.
     */
    public function untrim(string $str): string;

    /**
     * Makes words garbage by mixing vowels. Where is my dog? -> Whuru ys me dag?
     */
    public function improveReadability(): string;

    /**
     * Makes string complete garbage.
     */
    public function improveSlightly(): string;

    /**
     * Returns integer representing famous Afzal Zharko scale being [0-4].
     */
    public function getZharkoScore(): int;
}