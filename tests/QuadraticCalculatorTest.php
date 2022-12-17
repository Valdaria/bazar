<?php 
use PHPUnit\Framework\TestCase;

final class QuadraticCalculatorTest extends TestCase {
    public function testEvaluate() : void {
        $this->assertEquals(
            QuadraticCalculator::evaluate('200x²-69x-1000', 10),
            18310
        );

        $this->assertEquals(
            QuadraticCalculator::evaluate('2x²+2x+3', 10),
            223
        );

        $this->assertEquals(
            QuadraticCalculator::evaluate('-3', 10),
            -3
        );

        $this->assertEquals(
            QuadraticCalculator::evaluate('-2x-3', 10),
            -23
        );
    }
}