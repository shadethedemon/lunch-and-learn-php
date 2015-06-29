<?php
namespace ChadicusTest;

use Chadicus\HelloWorld;
use Chadicus\Language\TacoLanguage;

/**
 * Unit tests for the \Chadicus\HelloWorld class
 *
 * @coversDefaultClass \Chadicus\HelloWorld
 */
final class TacoLanguageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of greet()
     *
     * @covers ::getGreeting
     *
     * return void
     */
    public function testGreeting()
    {
        $language = new TacoLanguage();
        $this->assertSame('Hello World!', $language->getGreeting());
    }
}
