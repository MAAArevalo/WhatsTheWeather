<?php 

$cities = getCity();

get_header(); 

?>
<section id="home" class="container">
    <div id="search-city">
        <h1>What's the Weather?</h1>
        <p>Get the current weather of the city your choosing.</p>
        <form action="">
            <input type="text" value="" >
        </form>
    </div>
    <div class="flex">
        <div class="city-blocks">
            <?php 
                foreach ($cities as $city): 
                    $cityname = $city['name'];
                    //Check city is existing in the api.
                    if(getWeather( $cityname )):

                    echo $cityname;
                    endif;
            ?>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>