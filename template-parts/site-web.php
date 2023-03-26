<div class="cs-post-carousel-layout">
    <div class="cs-container swiper-container">
        <div class="swiper-wrapper"><?php

            // define query arguments
            $args = array(
                'posts_per_page' => 20, // your 'x' goes here
                'nopaging' => true
                // possibly more arguments here
            );
            // set up new query
            $tyler_query = new WP_Query( $args );
            
            // loop through found posts
            if ($tyler_query->have_posts()) {
                while ( $tyler_query->have_posts()) {
                    $tyler_query->the_post();
                    //Post item -->
                    ?><div class="swiper-slide">
                        <div class="cs-post-item">
                            <div class="cs-post-category-icon">
                                <a href="<?php the_permalink(); ?>"></i></a>
                            </div>
                            <div class="cs-post-thumb">
                                <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></a>
                            </div>
                            <div class="cs-post-inner">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                            </div>
                            <div class="cs-post-resume">
                                <h3><?php the_excerpt();?></h3>
                            </div>
                            <div class="cs-post-button">
                                <h3><a href="<?php the_permalink(); ?>">Voir le projet</a></h3>
                            </div>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div><?php
                }
            }
            // reset post data
            wp_reset_postdata();?>
        </div>
    </div>
</div>