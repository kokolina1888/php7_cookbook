<?php 

function returnsString(DateTime $date, $format):string{

	return $date->format($format);

}

function convertsToString($a, $b, $c):string
{
	return $a + $b + $c;
}

function makesDateTime($year, $month, $day) : DateTime 
{
	$date = new dateTime;
	$date->setDate($year, $month, $day);
	return $date;
}

function wrongDateTime($year, $month, $day) : DateTime
{
	return date($year . ' - ' . $month . ' - ' . $day);
}