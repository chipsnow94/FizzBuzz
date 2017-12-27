<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('FizzBuzz');
    }
    public function it_return_1_when_1()
    {
        $this->excecute(1)->shouldReturn(1);
    }

    public function it_return_2_when_2()
    {
        $this->excecute(2)->shouldReturn(2);
    }
    public function it_return_fizz_when_3()
    {
        $this->excecute(3)->shouldReturn('fizz');
    }
    public function it_return_buzz_when_4()
    {
        $this->excecute(5)->shouldReturn('buzz');
    }
    public function it_return_fizzbuzz_when_15()
    {
        $this->excecute(15)->shouldReturn('fizzbuzz');
    }
    
    public function it_return_fizz_when_123()
    {
        $this->shouldThrow(new \InvalidArgumentException('Invalid Number'))->duringExcecute(123);
    }
    public function it_return_fizz_when_type_acs()
    {
        $this->shouldThrow(new \InvalidArgumentException('Invalid Input-Must be a number'))->duringExcecute('acs');
    }
    public function it_return_a_sequence()
    {
        $this->excecuteUpTo(5)->shouldReturn([1,2,'fizz',4,'buzz']);
    }
}
