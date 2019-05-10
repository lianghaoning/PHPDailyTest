<?php

function number($str)
{
	$len = strlen($str);

	$arr = [];

	for ($i=0; $i < $len; $i++)
	{
		// var_dump($arr[$str[$i]]);

		if(isset($arr[$str[$i]]))
		{
			$arr[$str[$i]]++;
		}

		else
		{
			$arr[$str[$i]] = 1;
		}

		if($arr[$str[$i]] >= 3)
		{
			return $str[$i];
		}
	}
}

var_dump(number("Have you ever gone shopping and"));