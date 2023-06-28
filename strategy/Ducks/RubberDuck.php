<?php

namespace PatternsPHP\strategy\Ducks;

class RubberDuck extends Duck {
    public function __construct() {
        $this->setFlyBehavior(new FlyNoWay());
    }
}
