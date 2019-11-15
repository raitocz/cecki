<?php declare(strict_types=1);

namespace RaitoCZ\Cecki\Tests\Type;

use PHPUnit\Framework\TestCase;
use RaitoCZ\Cecki\Type\StringType;

class StringTypeTest extends TestCase
{

    /**
     * @dataProvider getRStrings
     */
    public function testCountR($expected, $string)
    {
        $string = new StringType($string);
        $this->assertSame($expected, $string->countR());
    }

    /**
     *
     */
    public function getRStrings()
    {
        return [
            [6, 'just searching for some retarded R char'],
            [1, "r"],
            [10, "Rr®Իṟṙṛṝℛℜ"],
            [0, "absolutely missing lol, watcha gonna do now?"]
        ];
    }
}