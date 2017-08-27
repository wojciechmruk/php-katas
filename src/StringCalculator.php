<?php

class StringCalculator
{

    public function add($numbers = '')
    {
        $result = 0;
        $numbers = preg_split("/(,|\n)/", $numbers);


        foreach ($numbers as $number) {
            $this->validateNumber($number);

            $result += (int) $number >= 1000 ? 0 : (int) $number;
        }

        return $result;
    }

    private function validateNumber()
    {
        if ($number < 0) throw new InvalidArgumentException('Invalid number provided: ' . $number);
    }
}