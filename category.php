<?php get_header(); ?> 
<h1 class="page_title"><?= single_cat_title(); ?></h1>

<div class="parentCard">
    <?php

    // recupération des données concernant la catégorie
    $category = get_queried_object();
    $this_slug = $category->slug;  // renvoi le slug DE LA PAGE
    $this_id = $category->term_id; // renvoi l'ID DE LA PAGE
    $this_name = $category->name;  // renvoi le name DE LA PAGE
    
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => $this_slug,
    );

    $my_query = new WP_Query( $args );

    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); 

            // ICI DANS LA BOUCLE
            //get_template_part( 'template-parts/card' );

    endwhile; endif; ?>

</div>
<?php the_posts_pagination();
wp_reset_postdata();
?>



<?php get_footer(); ?>