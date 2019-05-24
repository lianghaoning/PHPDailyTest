<?php

class Math
{
	public static function add($num1,$num2)
	{
		if($num2 == 0)
		{
			return $num1;
		}

		$carry = $num1 ^ $num2;

		$sum = ($num1 & $num2) << 1;

		return Math::add($carry,$sum);
	}
}

$p = Math::add(2,4);
var_dump($p);