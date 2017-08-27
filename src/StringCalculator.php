<?php

class StringCalculator
{

    public function add($numbers = '')
    {

        if (empty($numbers)) {
            return 0;
        }

        $numbers = preg_split("/(,|\n)/", $numbers);

        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }

        return $result;
    }
}