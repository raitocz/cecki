<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Tests\Type;

use PHPUnit\Framework\TestCase;
use RaitoCZ\Cecki\Type\StringType\StringType;

class StringTypeTest extends TestCase
{
    /**
     * @dataProvider getStringsToReverse
     * @param string $input
     */
    public function testDoubleReverse(string $input): void
    {
        $string = new StringType($input);
        $this->assertSame($input, $string->doubleReverseFast());
    }

    /**
     * @dataProvider getStringsToReverse
     * @param string $input
     */
    public function testDoubleReversePrecise(string $input): void
    {
        $string = new StringType($input);
        $this->assertSame($input, $string->doubleReversePrecise());
        $this->assertSame($string->doubleReverseFast(), $string->doubleReversePrecise());
    }

    /**
     * @return array
     */
    public function getStringsToReverse(): array
    {
        return [
            ['jelenovi pivo nelej'],
            ['lol'],
            ['ukaž mi řím žáku'],
            ['kobyla má malý bok'],
            ['65733']
        ];
    }

    /**
     * @dataProvider getRStrings
     * @param int $expected
     * @param string $string
     */
    public function testCountR(int $expected, string $string): void
    {
        $string = new StringType($string);
        $this->assertSame($expected, $string->countR());
    }

    /**
     * @return array
     */
    public function getRStrings(): array
    {
        return [
            [6, 'just searching for some retarded R char'],
            [1, "r"],
            [10, "Rr®Իṟṙṛṝℛℜ"],
            [0, "absolutely missing lol, watcha gonna do now?"]
        ];
    }
}
