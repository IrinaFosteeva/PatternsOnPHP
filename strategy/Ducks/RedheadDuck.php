<?php

namespace PatternsPHP\strategy\Ducks;

class RedheadDuck extends Duck {
    public function __construct() {
        $this->setFlyBehavior(new FlyWithWings());
    }
}
