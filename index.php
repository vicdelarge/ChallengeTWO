<?php
require_once('src/app/Autoloader.php');

$autoloader = new app\Autoloader;
spl_autoload_register(array($autoloader, 'handle'));

$numberMultiple = new app\challenge\NumberMultiple();
$formatNumbers = new app\challenge\FormatNumbers($numberMultiple);
$numberLoop = new app\challenge\NumberLoop($formatNumbers);

$data = $numberLoop->numberLoop();

foreach ($data as $value) {
    echo $value."\n";
}