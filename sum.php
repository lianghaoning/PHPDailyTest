<?php

//逻辑运算符求和
class Math
{
	public static function Sum_Solution($n)
	{
		$sum = $n;
		// var_dump($sum);die;

		$sum && ($sum+=Math::Sum_Solution($n-1));

		return $sum;
	}
}

$p = Math::Sum_Solution(5);
var_dump($p);