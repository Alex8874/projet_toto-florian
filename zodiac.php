<?php

//Inclut automatiquement tous les packages de composer

require_once __DIR__.'/vendor/autoload.php';

use Whatsma\ZodiacSign;

$calculator = new ZodiacSign\Calculator();

try {
  $zodiacSign = $calculator->calculate(3,12); //DATE OF BIRTHDAY
  //echo $zodiacSign . "\n";
} catch (ZodiacSign\InvalidDayException $e) {
  echo "ERROR: Invalid Day";
} catch (ZodiacSign\InvalidMonthException $e) {
  echo "ERROR: Invalid Month";
}
$traductionsFr = array(
	'aries' => 'belier',
	'taurus' => 'taureau',
	'gemini' => 'gemeaux',
	'cancer' => 'cancer',
	'leo' => 'lion',
	'virgo' => 'vierge',
	'libra' => 'balance',
	'scorpio' => 'scorpion',
	'sagittarius' => 'sagittaire',
	'capricorn' => 'capricorne',
	'aquarius' => 'verseau',
	'pisces' => 'poissons',
);
echo $traductionsFr[$zodiacSign].'<br/>';
