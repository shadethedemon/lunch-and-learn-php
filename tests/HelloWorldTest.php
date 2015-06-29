<?php
namespace ChadicusTest;

use Chadicus\HelloWorld;

/**
 * Unit tests for the \Chadicus\HelloWorld class
 *
 * @coversDefaultClass \Chadicus\HelloWorld
 */
final class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of greet()
     *
     * @test
     * @covers ::greet
     *
     * @return void
     */
    public function greet()
    {
        $languageMock = $this->getMock('\Chadicus\Language\LanguageInterface');
        $languageMock->method('getGreeting')->willReturn('Hello World');

        $helloWorld = new HelloWorld($languageMock);

        $this->assertSame('Hello World', $helloWorld->greet());
    }

    /**
     * @test
     * @covers ::__construct
     *
     * @return void
     */
    public function construct(){
        $languageMock = $this->getMock('\Chadicus\Language\LanguageInterface');

        $helloWorld = new HelloWorld($languageMock);

        $this->assertAttributeEquals($languageMock, 'language', $helloWorld);

    }

    /**
     * @test
     * @covers ::getLanguage
     *
     * @return void
     */
    public function getLanguage(){
        $languageMock = $this->getMock('\Chadicus\Language\LanguageInterface');

        $helloWorld = new HelloWorld($languageMock);

        $this->assertSame($languageMock, $helloWorld->getLanguage());

    }
}
