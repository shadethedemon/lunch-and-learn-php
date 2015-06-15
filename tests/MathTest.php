<?php
namespace ChadicusTest;

use Chadicus\Math;

/**
 * Unit tests for the \Chadicus\Math class
 *
 * @coversDefaultClass \Chadicus\Math
 */
final class MathTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Verify basic behavior of multiply method
	 * 
	 * @test
	 * @covers ::multiply
	 * 
	 * return void
	 */
	public function multiply() {
		$this->assertSame(25, Math::multiply(5, 5), 'Math::multiply() did not return 25 for 5 * 5');
	}
	
	/**
	 * Verify behavior of multiply when one argument is not a number
	 * 
	 * @test
	 * @covers ::multiply
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage Both inputs must be numeric
	 * 
	 * return void
	 */
	public function multiply_nonNumericInput() {
		Math::multiply('a', 5);
	}
}
