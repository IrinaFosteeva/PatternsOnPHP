<?php

namespace PatternsPHP\observer\weatherApp;

interface Subject {
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObservers();
}
