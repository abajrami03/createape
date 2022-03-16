<?php
function sec_slider(){
//Image Slider

//slider_image = field

?>
    <div class="sec_slider_093">
    <?php
        if( have_rows('second_slider') ):?>
            <div class="slider-sec slick_sec_slider_093">
                <!-- loop through the rows of data -->
                <?php while ( have_rows('second_slider') ) : the_row();
                    // display a sub field value
                    $image = get_sub_field('second_slider_image'); ?>
                    <div><img src="<?php echo $image; ?>"/></div>
                <?php endwhile;?>
            </div><?php 
        else :
            // no rows found
        endif;

        ?>
    </div>
    <?php
}
add_shortcode( 'sec_slider', 'sec_slider' );
?>