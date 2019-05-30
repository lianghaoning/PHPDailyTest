<?php

class Math
{
	public static function NumberOf1($n)
	{
		$count = 0;

		while($n)
		{
			$str = $n%2;
			// var_dump($str);

			if($str == 1)
			{
				$count++;
			}

			$chu = $n/2;
			// var_dump($chu);
		}

		return $count;
	}
}

$p = Math::NumberOf1(5);
var_dump($p);