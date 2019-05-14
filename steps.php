<?php

//青蛙跳台阶
class Math
{
	public static function calSteps($num)
	{
		if($num == 1)
		{
			return 1;
		}

		if($num == 2)
		{
			return 2;
		}

		return self::calSteps($num-1)+self::calSteps($num-2);
	}
}

$p = Math::calSteps(6);

var_dump($p);
