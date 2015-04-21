<?php

namespace Acme;

class FizzBuzz
{
    /**
     * @param $n
     * @return string
     */
    public function fizzbuzz($n)
    {
        if (!ctype_digit((string)$n)) {
            throw new \InvalidArgumentException('parameter must be natural number');
        }
        if ($n % 15 === 0) {
            return "FizzBuzz";
        }
        if ($n % 5 === 0) {
            return "Buzz";
        }
        if ($n % 3 === 0) {
            return "Fizz";
        }
        return (string)$n;
    }
}