<?php

class FizzBuzz
{
    const fizz =3;
    const buzz =5;
    const fizzbuzz =15;
    const MIN_NUM=1;
    const MAX_NUM=100;

    public function excecute($number)
    {
        $this->Check_Exception($number);
        if ($this->Check_FizzBuzz($number)) {
            $result ='FizzBuzz';
            return $result;
        } ;
        if ($this->Check_Fizz($number)) {
            $result ='Fizz';
            return $result;
        } ;
        if ($this->Check_Buzz($number)) {
            $result ='Buzz';
            return $result;
        } ;
        return $number;
    }
    public function excecuteUpTo($number)
    {
        $this->Check_Exception($number);
        $ArryNum=[];
        for ($i=1; $i <=$number ; $i++) {
            $ArryNum[]= $this->excecute($i);
        }
        return $ArryNum;
    }
    
    private function Check_Exception($number)
    {
        if (!is_numeric($number)) {
            # code...
            throw new InvalidArgumentException('Invalid Input-Must be a number');
        }

        if ($number < self::MIN_NUM || $number >self::MAX_NUM) {
            # code...
            throw new InvalidArgumentException('Invalid Number');
        }
    }
    private function Check_FizzBuzz($number)
    {
        if ($number % self::fizzbuzz ==0) {
            return true;
        }
    }
    private function Check_Fizz($number)
    {
        if ($number % self::fizz ==0) {
            return true;
        }
    }
    private function Check_Buzz($number)
    {
        if ($number %self::buzz ==0) {
            return true;
        }
    }
}
