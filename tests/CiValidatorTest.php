<?php

namespace Leewayweb\CiValidator;
use PHPUnit\Framework\TestCase;

class CiValidatorTest extends TestCase
{
    public function generateCIsWithValidity() : array
    {
        return [
            [ '57351030', true ],
            [ '57351033', false ],
            [ '57351046', true ],
            [ '26280442', true ],
            [ '2628044-2', true ],
            [ '5735103-3', false ],
            [ '5735103-0', true ],
        ];
    }

    public function generateCIsWithValidationDigit() : array
    {
        return [
            [ '5735103', 0 ],
            [ '5735104', 6 ],
            [ '2628044', 2 ],
        ];
    }

    /**
     * @param string $ci
     * @param bool $valid
     * @dataProvider generateCIsWithValidationDigit
     */
    public function testValidation_digitCalculatesAppliesAlgorithmCorrectly( string $ci, int $validation_digit ) : void
    {
        $sut = new CiValidator();

        $this->assertEquals( $validation_digit, $sut->validation_digit( $ci ) );
    }

    /**
     * @param string $ci
     * @param bool $valid
     * @dataProvider generateCIsWithValidity
     */
    public function testValidate_ciWillReturnTrueForValidCisAndFalseForNonValidCis( string $ci, bool $valid ) : void
    {
        $sut = new CiValidator();

        $this->assertEquals( $valid, $sut->validate_ci( $ci ) );
    }

    /**
     * @depends testValidate_ciWillReturnTrueForValidCisAndFalseForNonValidCis
     */
    public function testRandom_ciWillGenerateValidCIs() : void
    {
        $sut = new CiValidator();

        for ( $i = 0; $i < 10; $i++ ) {
            $this->assertEquals( true, $sut->validate_ci( $sut->random_ci() ) );
        }
    }
}