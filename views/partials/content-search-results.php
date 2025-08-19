
<h2>Search Results For: <?php echo $search; ?></h2>
<div class="search-results">
<?php 


foreach( $sc_val as $val): 
    foreach($all_countries as $country):
        if(mb_strtolower($country['name']) == $val):
?>

    <div class="search-item" data-value="<?php echo $country['code']; ?>">
        <h3><?php echo $country['name']; ?></h3>
    </div>

<?php 
        endif;
    endforeach; 
endforeach; 
?>
</div>
