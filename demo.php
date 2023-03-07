<?php
require __DIR__ . '/vendor/autoload.php';
use SebastianBergmann\Timer\Timer;
$newtimer = new Timer;
$newtimer->start();
foreach (\range(0, 100000) as $i) {
    // ...
    echo ("TEST ");
}
echo ("\r\n");
$scriptduration = $newtimer->stop();
echo ("It took " . $scriptduration->asSeconds() . "s executing");
// var_dump($scriptduration->asSeconds());