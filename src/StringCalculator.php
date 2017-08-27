<?php

class StringCalculator
{

    public function add($numbers = '')
    {
        $result = 0;
        $numbers = preg_split("/(,|\n)/", $numbers);

        foreach($numbers as $number){
            $result += (int) $number > 0 ? (int) $number : 0;
        }

        return $result;
    }
}