<?php

namespace PatternsPHP\strategy\Ducks;

class FlyNoWay implements FlyBehavior {
    public function fly() {
        echo "I can't fly!\n";
    }
}
