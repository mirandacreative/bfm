<div class="slick-slider-wrapper">
    <div class="slick-slider">
        <?php
            $front_page_id = 34;
            if( have_rows('home_slider', $front_page_id) ): 
                

                while( have_rows('home_slider', $front_page_id) ): the_row(); 
                    $headline = get_sub_field('headline');
                    $subheadline = get_sub_field('subheadline');
                    $slider_bg_image = get_sub_field('image');
                    $link_url = get_sub_field('link');
                    // $nw = get_sub_field('nw');
        ?>

                    <div class="slide-with-bg" style="background-image: url('<?php echo $slider_bg_image;?>');">
                        <section>
                            <h2><a href="<?php echo $link_url; ?>"><?php echo $headline;?></a></h2>
                            <p><a href="<?php echo $link_url; ?>"><?php echo $subheadline;?></a></p>
                            <p class="quote-link"><a class="button large secondary" href="<?php home_url('/'); ?>get-a-quote">GET A QUOTE</a></p>
                        </section>
                    </div>

                <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>