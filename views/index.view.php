<?php 

get_header(); 

?>
<section id="home" class="w-full px-4 py-[50px] block">
    <div class="container mx-auto">
        <div id="search-city" class="mb-10 w-full lg:w-1/2 mx-auto">
            <h1 class="text-2xl font-bold text-center mb-5">What's the Weather?</h1>
            <p class="text-center mb-4">Get the current weather of the country or city your choosing.</p>
            <form action="/" method="get">
                <input id="search" type="text" value="" name="s" placeholder="Search Country or Cities" class="w-full p-3 border-b border-b-gray-800">
            </form>

            
        </div>
        <div id="content">
            <?php 
                if(empty($search)):
                    require 'partials/content-main.php';
                elseif(!empty($search)):
                    require 'partials/content-search-results.php';
                endif;
            ?>
        </div>

    </div>
</section>
<?php get_footer(); ?>