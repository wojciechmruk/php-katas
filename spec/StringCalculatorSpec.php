<?php

namespace spec;

use StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{

    function it_translate_empty_string_into_0()
    {

        $this->add()->shouldEqual(0);
    }

    function it_return_one_number_5()
    {
        $this->add('5')->shouldEqual(5);
    }
}