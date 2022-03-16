<?php get_header();?>
<div class="container_093">
    <div class="container_row_093">
        <?php echo do_shortcode( '[header_slider]' ); ?>
    </div>
    <div class="container_02_row_093">
        <?php echo do_shortcode( '[sec_slider]' ); ?>
    </div>
    <div class="container">
        <div class="container_02_row_093">
            <h2><?php echo  get_field('second_title') ?></h2>

            <!-- Content with icons in the left side -->
            <?php 
                $rows = get_field('content_repeater');
                if( $rows ) {
                    echo '<div class="row">';
                    foreach( $rows as $row ) {
                        echo '<div class="col-sm-4 col_content_093">';
                            echo '<div class="row">';
                                echo '<div class="col-sm-2">';
                                    echo '<img src="' . $row['icon'] . '"alt="" />';
                                echo '</div>';
                                echo '<div class="col-sm-10">';
                                    echo '<h6>'.  $row['min_title'] . '</h6>';
                                    echo wpautop( $row['text'] );
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                }
                ?>
        </div>

        <!-- Counter with 3 col -->
        <div class="container_03_row_093">
            <?php 
                $counts = get_field('counter_repeater');
                if( $counts ) {
                    echo '<div class="row">';
                    foreach( $counts as $count ) {
                        echo '<div class="col-sm-4 col_content_093">';
                            echo '<div class="row">';
                                echo '<div class="col-sm-3">';
                                    echo '<img src="' . $count['counter_icon'] . '"alt="" />';
                                echo '</div>';
                                echo '<div class="col-sm-9">';
                                    echo '<div class="counta numbers_093">'.  $count['number'] . '+</div>';
                                    echo wpautop( $count['label_number'] );
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                }
                ?>
        </div>
    </div>
    
</div>
<?php get_footer();?>