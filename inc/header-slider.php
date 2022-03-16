<?php
function header_slider(){
//Image Slider



//slider_image = field

?>
    <div class="header_slider_093">
    <?php
        if( have_rows('slider') ):?>
            <div class="one-time slick_slider_093">
                <!-- loop through the rows of data -->
                <?php while ( have_rows('slider') ) : the_row();
                    // display a sub field value
                    $image = get_sub_field('image_of_header_slider'); ?>
                    <div><img src="<?php echo $image; ?>"/></div>
                <?php endwhile;?>
            </div><?php 
        else :
            // no rows found
        endif;



        $title_slider_header = get_field('title_of_slider');
        $text_slider_header = get_field('text_of_slider');
        $label_bttn_slider_header = get_field('button_label_of_slider');
        $link_slider_header = get_field('link_of_button_sliderr');

        ?>
        <div class="slider_content_093">
            <h1 class="slider_h1_093"><?php echo $title_slider_header ?></h1>
            <p class="slider_text_093"><?php echo $text_slider_header ?></p>
            <div class="slider_link_row_093">
                <a class="slider_link_093 btn" href="<?php echo $link_slider_header ?>"><?php echo $label_bttn_slider_header ?></a>
            </div>
        </div>
    </div>
    <?php
}
add_shortcode( 'header_slider', 'header_slider' );
?>