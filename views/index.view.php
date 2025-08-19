<?php 

$cities = getCity();

$countries = getCountry();

get_header(); 

?>
<section id="home" class="w-full px-4 py-[50px] block">
    <div class="container mx-auto">
        <div id="search-city" class="mb-10 w-full lg:w-1/2 mx-auto">
            <h1 class="text-2xl font-bold text-center mb-5">What's the Weather?</h1>
            <p class="text-center mb-4">Get the current weather of the country or city your choosing.</p>
            <form action="">
                <input type="text" value="" placeholder="Search Country or Cities" class="w-full p-3 border-b border-b-gray-800">
            </form>
        </div>
        <div id="content">
            <div class="city-blocks flex gap-5 flex-wrap justify-center">
                <?php 
                    foreach ($countries as $country): 
                        $countryname = $country['name'];
                        $countrycode = strtolower( $country['code'] );
                ?>
                <div data-value="<?php echo $countrycode; ?>" class="city p-3 w-1/3 lg:w-1/6 md:w-1/4 text-center border border-sky-100 h-[100px] cursor-pointer flex flex-col justify-center items-center hover:bg-sky-50">
                    <div class="flag"><span class="fi fi-<?php echo $countrycode; ?>"></span></div>
                    <?php echo $countryname; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>