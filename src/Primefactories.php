<?php

class Primefactories
{

    public function generate($argument)
    {
        $result = [];

        for ($number = 2; $number <= $argument; $number++) {
            for (; $argument % $number === 0; $argument /= $number) {
                $result[] = $number;
            }
        }

        return $result;
    }
}