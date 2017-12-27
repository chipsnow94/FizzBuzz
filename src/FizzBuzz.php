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
        if ($number % self::fizzbuzz ==0) {
            $result='fizzbuzz';
            return $result;
        }
        if ($number % self::fizz ==0) {
            $result='fizz';
            return $result;
        }
        if ($number %self::buzz ==0) {
            $result='buzz';
            return $result;
        }
        return $number;
    }
    public function excecuteUpTo($number)
    {
        $this->Check_Exception($number);
        $ArryNum=[];
        for ($i=1; $i <=$number ; $i++) {
            # code...
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
}
