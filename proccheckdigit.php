<?php
$zone = $_POST{"zone"};
$aisle = $_POST{"aisle"};
$bay = $_POST{"bay"};
$level = $_POST{"level"};
$slot = $_POST{"slot"};

$loc = $zone.$aisle.$bay.$level.$slot;
echo "location var reports as: $loc <br>";
$floc = floatval($loc);
$locmod = ($floc/98);
$txtloc = sprintf('%s', $locmod);
$i = strpos($txtloc, '.');
$txtrem = substr($txtloc, $i+1);
$txtdotrem = ".".$txtrem;
echo "txtdotrem says it is: $txtdotrem <br>";
$dotrem = sprintf("%f", $txtdotrem);
echo "dotrem says it is: $dotrem <br>";
$newrem = ($dotrem*98);
echo "newrem says it is: $newrem <br>";

$digit = round($dotrem);
echo "digit says it is: $digit <br>";
if ($digit >= '10') {
	$checkdigit=sprintf("%s", $digit);
} else {
	$pcheckdigit=sprintf("%s", $digit);
	$checkdigit="0".$pcheckdigit ;
}
Echo "The Checkdigit for ".$loc." is: ".$checkdigit;

?>