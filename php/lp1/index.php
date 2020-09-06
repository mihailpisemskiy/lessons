<?php
/*
@author Mikhail Pisemskiy
@12.08.2020
 */

class SumNumber
{
	public $result; //результат

	function __construct($num)
	{
		$arrNums = str_split($num);
		foreach ($arrNums as $number) {
			$this->result += $number;
		}
		return $this->result;
	}
}

$sum = new sumNumber(132);
print_r($sum)
?>