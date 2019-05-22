<?php

class Math
{
	public static function ReverseSentence($str)
	{
		$arr = explode(' ', $str);
		// echo "<pre>";var_dump($arr);

		$rev = array_reverse($arr,true);
		// var_dump($rev);

		$string = implode(' ', $rev);

		return $string;
	}
}

$p = Math::ReverseSentence("student. a am I");
var_dump($p);