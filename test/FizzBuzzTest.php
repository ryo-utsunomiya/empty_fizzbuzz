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

    /**
     * @test
     */
    public function fizzbuzzに15の倍数を渡すとFizzBuzzを返す()
    {
        $fz = new Acme\FizzBuzz();
        $this->assertThat($fz->fizzbuzz(15), $this->identicalTo("FizzBuzz"));
        $this->assertThat($fz->fizzbuzz(30), $this->identicalTo("FizzBuzz"));
    }

    /**
     * @test
     */
    public function fizzbuzzに5の倍数を渡すとBuzzを返す()
    {
        $fz = new Acme\FizzBuzz();
        $this->assertThat($fz->fizzbuzz(5), $this->identicalTo("Buzz"));
        $this->assertThat($fz->fizzbuzz(10), $this->identicalTo("Buzz"));
    }

    /**
     * @test
     */
    public function fizzbuzzに3の倍数を渡すとFizzを返す()
    {
        $fz = new Acme\FizzBuzz();
        $this->assertThat($fz->fizzbuzz(3), $this->identicalTo("Fizz"));
        $this->assertThat($fz->fizzbuzz(6), $this->identicalTo("Fizz"));
    }

    /**
     * @test
     */
    public function fizzbuzzに3の倍数でも5の倍数でもない数を渡すとその数の文字列を返す()
    {
        $fz = new Acme\FizzBuzz();
        $this->assertThat($fz->fizzbuzz(1), $this->identicalTo("1"));
        $this->assertThat($fz->fizzbuzz(2), $this->identicalTo("2"));
    }
}
