<?php

namespace PatternsPHP\strategy\Ducks;

class FlyWithWings implements FlyBehavior {
    public function fly() {
        echo "I'm flying with wings!\n";
    }
}
