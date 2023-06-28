<?php

namespace PatternsPHP\strategy\Ducks;

class Duck {
    private $flyBehavior;

    public function setFlyBehavior(FlyBehavior $flyOption) {
        $this->flyBehavior = $flyOption;
    }

    public function performFly() {
        $this->flyBehavior->fly();
    }
}
