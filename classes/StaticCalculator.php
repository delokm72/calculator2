<?php

//namespace calc;

class StaticCalculator implements StaticCalculatorMaket
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function subtraction($a, $b)
    {
        return $a-$b;
    }

    public static function multiple($a, $b)
    {
        return $a*$b;
    }

    public static function divide($a, $b)
    {
        if ($b!=0)
        {
            return $a/$b;
        }
        else echo "WTF?!";
    }
}