<?php

//奇数在前 偶数在后
class Math
{
	public static function number($arr)
	{
		$odd = [];
		$even = [];

		foreach ($arr as $k => $v)
		{
			if($v%2 == 1)
			{
				$odd[] = $v;
			}

			else
			{
				$even[] = $v;
			}
		}

		return array_merge($odd,$even);
	}
}

$arr = [1,2,3,4,5,6];

$p = Math::number($arr);

echo "<pre>";

var_dump($p);