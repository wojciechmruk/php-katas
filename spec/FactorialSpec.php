<?php

namespace spec;

use Factorial;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorialSpec extends ObjectBehavior
{

    function it_returns_false_for_negative_number()
    {
        $this->calculate(-1)->shouldReturn(false);
    }

    function it_returns_1_for_0()
    {
        $this->calculate(0)->shouldReturn(1);
    }

    function it_returns_2_for_2()
    {
        $this->calculate(2)->shouldReturn(2);
    }

    function it_returns_120_for_5()
    {
        $this->calculate(5)->shouldReturn(120);
    }
}