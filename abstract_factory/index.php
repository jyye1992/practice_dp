<?php

require_once "./vendor/autoload.php";

use App\SaberEquirement;

$saberEquirement = new SaberEquirement();
$archerEquirement = new \App\ArcherEquirement();
echo "saber\n";
echo "-----\n";
echo $saberEquirement->createWeapon()->display() . "\n";
echo $saberEquirement->createArmor()->display() . "\n";
echo "\n\n";
echo "archer\n";
echo "-----\n";
echo $archerEquirement->createWeapon()->display() . "\n";
echo $archerEquirement->createArmor()->display() . "\n";
