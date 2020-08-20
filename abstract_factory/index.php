<?php

require_once "./vendor/autoload.php";

use App\SabarEquirement;

$sabarEquirement = new SabarEquirement();
$archerEquirement = new \App\ArcherEquirement();
echo "sabar\n";
echo "-----\n";
echo $sabarEquirement->createWeapon()->display() . "\n";
echo $sabarEquirement->createArmor()->display() . "\n";
echo "\n\n";
echo "archer\n";
echo "-----\n";
echo $archerEquirement->createWeapon()->display() . "\n";
echo $archerEquirement->createArmor()->display() . "\n";


