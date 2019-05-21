<?php

class Math
{
	public static function FindNumsAppearOnce($array)
	{
		$count = array_count_values($array); //计算出次数
		// var_dump($arr);

		foreach ($count as $k => $v)
		{
			if($v == 1) //判断次数为1的时候输出
			{
				$new_arr[] = $k;
			}
		}

		return $new_arr; //返回参数
	}
}

$p = Math::FindNumsAppearOnce([2,4,3,6,3,2,5,5]);

echo "<pre>";
var_dump($p);