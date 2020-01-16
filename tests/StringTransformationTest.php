<?php

namespace conquerorsoft\unit_testing;

use PHPUnit\Framework\TestCase;

class StringTransformationTest extends TestCase
{
    /**
     * @dataProvider decodedStringsProvider
     */
    public function testAlphaStringIsEncoded(string $input_string, string $expected)
    {
        $string = new StringTransformation();
        $new_string = $string->encode($input_string);
        $this->assertEquals($expected, $new_string);
    }
    
    public function decodedStringsProvider():array
    {
        return [
            ['some string', 'ßøµ´ ß†®ˆ˜©'],
            ['valid string', '√å¬ˆ∂ ß†®ˆ˜©'],
            ['Christian Varela', 'Ç˙®ˆß†ˆå˜ ◊å®´¬å'],
            ['Yin', 'Áˆ˜'],
            ['Password', '∏åßß∑ø®∂'],
            ['Yang', 'Áå˜©'],
            ['Some example', 'Íøµ´ ´≈åµπ¬´'],
            ['SunshinePHP', 'Í¨˜ß˙ˆ˜´∏Ó∏'],
        ];
    }
}
