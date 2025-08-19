<?php

require_once 'api/weather.php';


$city = weather::getCity();
$all_countries = weather::getCountry();
$countries_col = array_map('mb_strtolower', array_column($all_countries, 'name'));



class index{
    
    public function __construct() {

    }

    function searchCountry($s, $countries){
        if(empty($s)){ return; }

        $matches = array_filter($countries, function($country) use ($s){
            return stripos($country, $s) !== false;
        });
        
        return array_values($matches);
    }
}

$main = new index();

$search = "";
$sc_val = array();
if(isset($_GET['s'])){
    $search = $_GET['s'];
    $sc_val = $main->searchCountry(mb_strtolower($search), $countries_col);
}


require 'views/index.view.php';