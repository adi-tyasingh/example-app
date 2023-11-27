<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;
class PracticalTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1,3), 4);
    }
    public function testAddAcceptsFloat() :void
    {
        $result = Practical::add(1.5, 3.5);
        $this->assertEquals(5.0, $result);
    }

    public function testAddAcceptsFloatInteger():void
    {
        $result = Practical::add(1.5, 2);
        $this->assertEquals(3.5, $result);
    }

    public function testAddAcceptsIntegerString():void
    {
        $result = Practical::add("1", "2");
        $this->assertEquals(3, $result);
    }

    public function testAddAcceptsFloatString():void
    {
        $result = Practical::add("1.4", "3.14");
        $this->assertEquals(4.54, $result);
    }

    public function testAddRejectsAlphabetString():void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("abc", "xyz");
    }

    public function testAddRejectsAlphanumericString():void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("a1", 1);
    }

    public function testFibonacciAcceptsInteger():void
    {
        $result = Practical::generateFibonacciSequence(4);
        $this->assertEquals([0, 1, 1, 2], $result);
    }

    public function testFibonacciRejectsIntegerString():void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("4");
    }

    public function testFibonacciRejectsAlphabetString():void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("abc");
    }

    public function testFibonacciRejectsFloat():void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence(3.5);
    }
}
?>