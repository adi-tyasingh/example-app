<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
require(__DIR__.'/../../practicals/song.php');
use practicals\song;

class SongTest extends TestCase
{
    public function testSetTempo()
    {
        $song = new Song();
        $song->setTempo(60);
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString()
    {
        $song = new Song();
        $song->setTempo("60");
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoRejectsAlphabetString()
    {
        $this->expectException(\InvalidArgumentException::class);

        $song = new Song();
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat()
    {
        $this->expectException(\InvalidArgumentException::class);

        $song = new Song();
        $song->setTempo(60.5);
    }

}
