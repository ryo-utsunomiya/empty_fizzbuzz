<?php

require_once __DIR__ . '/../FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
    * @test
    */
    public function dummyTest()
    {
        //$this->assertThat(true, $this->isTrue());
        $this->assertSame(true, true);
    }
}
