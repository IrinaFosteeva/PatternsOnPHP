<?php

namespace PatternsPHP\observer\weatherApp;

require_once __DIR__.'/Observer.php';

// Класс, представляющий функцию оповещения значений

class Display implements Observer {
    private $temperature;
    private $humidity;
    private $pressure;

    public function update(float $temperature, float $humidity, float $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

    public function display() {
        echo "Текущие значения: Температура: {$this->temperature}°C, Влажность: {$this->humidity}%, Давление: {$this->pressure} мм рт. ст.\n";
    }
}
