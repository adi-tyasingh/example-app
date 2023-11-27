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
}
?>