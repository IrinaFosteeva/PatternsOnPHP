<?php

namespace PatternsPHP\strategy\Ducks;

require_once __DIR__.'/Duck.php';
require_once __DIR__.'/RubberDuck.php';
require_once __DIR__.'/RedheadDuck.php';
require_once __DIR__.'/FlyBehavior.php';
require_once __DIR__.'/FlyWithWings.php';
require_once __DIR__.'/FlyNoWay.php';

$rubberDuck = new RubberDuck();
$redheadDuck = new RedheadDuck();

$rubberDuck->performFly();
$redheadDuck->performFly();
