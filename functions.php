<?php
	/**
	 * Created by PhpStorm.
	 * User: matthewbarry
	 * Date: 4Jan//19
	 * Time: 10:38
	 */

	function printer($array)
	{
		for ($i = 0; $i  < count($array) ; $i++)
		{
			echo $array[$i] .", ";
		}
	}

	function largest($array)
	{
		return max($array);
	}

	function average($array)
	{
		//divide array sum by the array length to give you the average
		$arraySum = array_sum($array);//Sum of array
		$arrayLength = count($array);//length of array

		return ($arraySum/$arrayLength);
	}

	function removeDups($array)
	{
		//remove duplicates from the array
		$arraySlim = array_unique($array);
		for ($i = 0; $i  < count($array) ; $i++)
		{
			if(!$arraySlim[$i] == NULL)
			{
				echo $arraySlim[$i] .", ";
			}
		}
	}