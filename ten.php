<?php

class Math
{
	public static function NumberOf1($n)
	{
		$count = 0;

		while($n)
		{
			$yushu = $n%2;
			// var_dump($yushu);

			if($str == 1)
			{
				$count++;
			}

			$n = $n/2;
			// var_dump($n);
		}

		return $count;
	}
}

$p = Math::NumberOf1(5);
var_dump($p);
