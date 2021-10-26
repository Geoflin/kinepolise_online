<?php
function unix_timestamp($datetime)
{
//On convertit le dateTime en Timestamp (trouvé sur internet: url perdue)
	$datetime = str_replace(array(' ', ':'), '-', $datetime);
	$c    = explode('-', $datetime);
	$c    = array_pad($c, 6, 0);
	array_walk($c, 'intval');
 
	return mktime($c[3], $c[4], $c[5], $c[1], $c[2], $c[0]);
} 