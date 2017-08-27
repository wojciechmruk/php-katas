<?php

namespace spec;

use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class StringCalculatorSpec extends ObjectBehavior
{

    function it_translate_no_string_into_0()
    {
        $this->add()->shouldEqual(0);
    }

    function it_translate_empty_string_into_0()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_return_one_number_5()
    {
        $this->add('5')->shouldEqual(5);
    }

    function it_adds_multiple_numbers_1_2_3_should_return_6()
    {
        $this->add('1,2,3')->shouldEqual(6);
    }

    function it_disallowns_negative_numbers()
    {
        $this->shouldThrow(new InvalidArgumentException('Invalid number provided: -3'))->duringAdd('1,2,-3');
    }

    function it_ignores_if_number_is_gt_or_equal_1000(){
        $this->add('1,2,3,1000,1001')->shouldEqual(6);
    }
}