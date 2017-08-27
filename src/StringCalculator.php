<?php

class StringCalculator
{

    public function add($numbers = '')
    {
        $numbers = preg_split("/(,|\n)/", $numbers);

        return array_sum($numbers);

    }
}