<div class="cs-post-carousel-layout">
    <div class="cs-container swiper-container">
        <div class="swiper-wrapper"><?php

            // define query arguments
            $args = array(
                'posts_per_page' => 20, // your 'x' goes here
                'nopaging' => true,
                // possibly more arguments here
                'cat' => 5, //(int) - use category id
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
                                <div class="prev-slide" onclick="plusSlides(-1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maquette/webdesign.svg" alt="webdesign"></div>
                                <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></a>
                                <div class="next-slide" onclick="plusSlides(1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maquette/webdesign.svg" alt="webdesign"></div>
                            </div>
                            <div class="cs-post-inner">
                                <a class="prev" onclick="plusSlides(-1)">&#8678;</a>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                                <a class="next" onclick="plusSlides(1)">&#8680;</a>  
                            </div>
                            <div class="cs-post-resume-button">
                                <div class="cs-post-resume">
                                    <p><?php the_excerpt();?></p>
                                </div>
                                <div class="cs-post-button">
                                    <a href="<?php the_permalink(); ?>">Voir le projet</a>
                                </div>
                            </div>
                            
                        </div>
                    </div><?php
                }
            }
            // reset post data
            wp_reset_postdata();?>
        </div>
    </div>
</div>