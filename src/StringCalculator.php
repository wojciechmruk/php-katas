<?php

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    public function add($numbers = '')
    {
        $result = 0;
        $numbers = $this->parseNumbers($numbers);

        foreach ($numbers as $number) {
            $this->validateNumber($number);

            $result += $number >= self::MAX_NUMBER_ALLOWED ? 0 : $number;
        }

        return $result;
    }

    private function validateNumber($number)
    {
        if ($number < 0)
                throw new InvalidArgumentException('Invalid number provided: ' . $number);
    }

    private function parseNumbers($numbers)
    {
        return array_map('intval', preg_split("/(,|\n)/", $numbers));
    }
}