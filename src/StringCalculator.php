<?php

class StringCalculator
{

    public function add($numbers = '')
    {
        if (intval($numbers) > 0) {
            return intval($numbers);
        }
        return 0;
    }
}