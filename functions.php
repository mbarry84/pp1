<?php
	/**
	 * Created by PhpStorm.
	 * User: matthewbarry
	 * Date: 4Jan//19
	 * Time: 10:38
	 */

	function printer($array)
	{
		for ($i = 0; $i< sizeof($array) ; $i++)
		{
			echo $array[$i] .", ";
		}
	}

	function largest($array)
	{
		return max($array);
	}