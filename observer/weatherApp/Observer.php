<?php

namespace PatternsPHP\observer\weatherApp;

interface Observer {
    public function update(float $temperature, float $humidity, float $pressure);
}
