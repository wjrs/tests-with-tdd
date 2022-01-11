<?php

namespace tests\TypeValidTest;

use App\NumberValidator;
use PHPUnit\Framework\TestCase;

class NumberValidTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testIfInputIsValid($value, $expectedResult)
    {
        $numberValidator = new NumberValidator($value);
        $isValid = $numberValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider(): array
    {
        return [
            'shouldBeValidWhenIsANumber' => ['value' => 123, 'expectedResult' => true],
            'shouldBeInvalidWhenNotIsANumber' => ['value' => 'string', 'expectedResult' => false],
            'shouldBeInvalidWhenIsEmpty' => ['value' => '', 'expectedResult' => false]
        ];
    }
}