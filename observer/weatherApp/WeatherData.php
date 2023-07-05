<?php

namespace PatternsPHP\observer\weatherApp;

// Класс, представляющий систему weatherData
class WeatherData implements Subject {
    private $observers = [];
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->notifyObservers();
    }
}
