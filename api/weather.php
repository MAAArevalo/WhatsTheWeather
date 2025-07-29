<?php

/* Open weather city list */
function getCity( ){
    $city_data = file_get_contents( 'data/city.list.json' );
    return json_decode( $city_data, true );
}

/* Free API from openweathermap.org */

function getWeather( $params = '' ) {

    $city = $params;
    $key = "088d99bf3f0e3d3be6010cf442a33a16";
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$key}";



    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $response = curl_exec( $ch );

    curl_close( $ch );

    return json_decode( $response, true );

}
