<?php

//计算开始数和结束数之间1出现的次数
class Math
{
	public static function calFn($start,$end)
	{
		$count = 0;

		for ($i=$start; $i <= $end; $i++)
		{ 
			$count += substr_count($i, 1); //substr_count计算字符串出现的次数
		}

		return $count;
	}
}

$p = Math::calFn(1,13);

var_dump($p);