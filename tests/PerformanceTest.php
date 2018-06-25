<?php

namespace Metroplex\EdifactTests;

use Metroplex\Edifact\Message;
use function file_exists;
use function file_get_contents;
use function file_put_contents;

class PerformanceTest extends \PHPUnit_Framework_TestCase
{
    private $tmp = __DIR__ . "/data/tmp.edi";

    public function setUp()
    {
        $data = file_get_contents(__DIR__ ."/data/wikipedia.edi");

        file_put_contents($this->tmp, "");
        for ($i = 0; $i < 2999; ++$i) {
            file_put_contents($this->tmp, $data, \FILE_APPEND);
        }
    }


    public function tearDown()
    {
        if (file_exists($this->tmp)) {
            unlink($this->tmp);
        }
    }


    public function testTokenizerPerformance()
    {
        $start = time();

        Message::fromFile($this->tmp);

        $finish = time();

        $this->assertLessThan(10, $finish - $start);
    }
}
