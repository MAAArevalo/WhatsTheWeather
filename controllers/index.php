<?php

$search = "";
if(isset($_GET['s'])) $search = $_GET['s'];

require_once 'api/weather.php';


$city = weather::getCity();
$countries = weather::getCountry();
$country_col = array_map('mb_strtolower', array_column($countries, 'name'));

class index{
    
    public function __construct() {

    }

    function search($s, $country){
        if(empty($s)){ return; }

        if(in_array($s, $country, true)){
            return "found";
        }else{
            return "not found";
        }
    }
}

$main = new index();


$s_val = $main->search($search, $country_col);
// echo '<pre>';
// print_r($countries);
// echo '</pre>';
print_r($s_val);


require 'views/index.view.php';