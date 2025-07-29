<?php

require_once 'api/weather.php';

$weather = getWeather();
$city = getCity();

require 'views/index.view.php';





