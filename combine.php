<?php

class Math
{
	public static function Combine($arr_A,$arr_B)
	{
		$arr1 = count($arr_A);
		// var_dump($arr1);die;

		$arr_C = [];

		$t = 0;

		for ($i=0; $i < $arr1; $i++)
		{ 
			$arr_C[] = $arr_A;
		}
		// echo "<pre>";var_dump($arr_C);

		$arr2 = count($arr_B);

		for ($i=0; $i < $arr2; $i++)
		{ 
			$arr_C[] = $arr_B;
		}
		// echo "<pre>";var_dump($arr_C);die;

		$arr3 = count($arr_C);
		// echo "<pre>";var_dump($arr3);die;

		for ($i=0; $i < $arr3; $i++)
		{
			for ($j=1; $j < $arr3-1; $j++)
			{
				// echo "<pre>";var_dump($arr_C);
				if($arr_C[$j] < $arr_C[$j+1])
				{
					$t = $arr_C[$j];
					$arr_C[$j] = $arr_C[$j+1];
					$arr_C[$j+1] = $t;
				}
			}
		}
		echo "<pre>";var_dump($arr_C);die;

		// return $arr_C;
	}
}

$arr_A = [1,3,6,9];
$arr_B = [2,4,5,8,10];

$p = Math::Combine($arr_A,$arr_B);
var_dump($p);