<?php
$zone = $_POST{"zone"};
$aisle = $_POST{"aisle"};
$bay = $_POST{"bay"};
$level = $_POST{"level"};
$slot = $_POST{"slot"};

$loc = $zone.$aisle.$bay.$level.$slot;
echo "location var reports as: $loc <br>";
$floc = floatval($loc);
$locmod = fmod($floc,98);
echo "Mod98 for location is $locmod";
$txtmod = sprintf("%s", $locmod);
$txtdotrem = "0.".$txtmod;
echo "txtdotrem says it is: $txtdotrem <br>";
$dotrem = sprintf("%f", $txtdotrem);
echo "dotrem says it is: $dotrem <br>";
$modtest = fmod($floc,98);
echo "modtest says it is $modtest<br>";
$newrem = ($dotrem*98);
echo "newrem says it is: $newrem <br>";

$digit = round($newrem);
echo "digit says it is: $digit <br>";
if ($digit >= '10') {
	$checkdigit=sprintf("%s", $digit);
} else {
	$pcheckdigit=sprintf("%s", $digit);
	$checkdigit="0".$pcheckdigit ;
}
Echo "The Checkdigit for ".$loc." is: ".$checkdigit;

?>
