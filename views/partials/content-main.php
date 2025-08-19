<div class="city-blocks flex gap-5 flex-wrap justify-center">
    <?php 
        foreach ($all_countries as $country): 
            $countryname = $country['name'];
            $countrycode = strtolower( $country['code'] );
    ?>
    <div data-value="<?php echo $countrycode; ?>" class="city p-3 w-1/3 lg:w-1/6 md:w-1/4 text-center border border-sky-100 h-[100px] cursor-pointer flex flex-col justify-center items-center hover:bg-sky-50">
        <div class="flag"><span class="fi fi-<?php echo $countrycode; ?>"></span></div>
        <?php echo $countryname; ?>
    </div>
    <?php endforeach; ?>
</div>