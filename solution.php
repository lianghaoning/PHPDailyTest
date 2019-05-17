<?php

class Math
{
	public static function GetUglyNumber_Solution($index)
	{
		if(!is_numeric($index))
		{
			echo "不是一个数值";
			return false;
		}

		if($index/2)
		{
			self::GetUglyNumber_Solution($index)/2;
			die;
		}

		if($index/3)
		{
			self::GetUglyNumber_Solution($index)/3;
			die;
		}

		if($index/5)
		{
			self::GetUglyNumber_Solution($index)/5;
			die;
		}

		if($index == 1)
		{
			return "是丑数";
		}

		else
		{
			return "不是丑数";
		}
	}
}

$p = Math::GetUglyNumber_Solution(12);

var_dump($p);