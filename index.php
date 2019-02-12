<?php

require __DIR__ . '/vendor/autoload.php';

use \ChristianEssl\OtterNameBuilder\Utility\NameListUtility;
use \ChristianEssl\OtterNameBuilder\Builder\OtterNameBuilder;
use \ChristianEssl\OtterNameBuilder\Generator\GenericNameGenerator;

$firstNamesFemale = NameListUtility::getNameList('FirstNamesFemale.txt');
$firstNamesMale = NameListUtility::getNameList('FirstNamesMale.txt');
$firstNames = array_merge($firstNamesFemale, $firstNamesMale);
$otterLastNames = NameListUtility::getNameList('OtterLastNames.txt');

$builder = new OtterNameBuilder(
    new GenericNameGenerator($firstNames, 4, 10),
    new GenericNameGenerator($firstNames, 4, 10),
    new GenericNameGenerator($otterLastNames, 4, 10)
);

for ($i = 0; $i < 20; $i++) {
    echo $builder->getName() . "<br />\n";
}