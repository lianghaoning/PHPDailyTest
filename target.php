<?php

class Math
{
	public static function find($target,$array)
	{
		if($array[0][0] > $target)
		{
			return false;
		}
		// echo "<pre>";

		$arr = array_pop($array); //数组中的第一维数组最后一个下标
		// var_dump($arr);die;
		$last = array_pop($arr); //末尾最后一个数
		// var_dump($last);die;

		// foreach ($array as $k => $v)
		// {
		// 	if($array[0] < $last)
		// 	{
		// 		$m = array_splice($array[0], 0,$target);
		// 	}
		// }

		foreach ($array as $k => $v)
		{
			if(in_array($target, $v))
			{
				unset($array[$k]);
				return true;
			}
		}

		return false;
	}
}

$p = Math::find(8,[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]]);
var_dump($p);