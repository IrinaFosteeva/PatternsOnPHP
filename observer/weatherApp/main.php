<?php

namespace PatternsPHP\observer\weatherApp;

require_once __DIR__.'/Display.php';
require_once __DIR__.'/Observer.php';
require_once __DIR__.'/Subject.php';
require_once __DIR__.'/WeatherData.php';

$weatherData = new WeatherData();

// Создаем два объекта-наблюдателя
$display1 = new Display();
$display2 = new Display();

// Регистрируем наблюдателей в субъекте
$weatherData->registerObserver($display1);
$weatherData->registerObserver($display2);

// Устанавливаем значения температуры, влажности и давления
$weatherData->setMeasurements(25.5, 70, 760);

// Вывод:
// Текущие значения: Температура: 25.5°C, Влажность: 70%, Давление: 760 мм рт. ст.

// Удаляем одного из наблюдателей
$weatherData->removeObserver($display1);

// Устанавливаем новые значения
$weatherData->setMeasurements(30.2, 65, 755);
