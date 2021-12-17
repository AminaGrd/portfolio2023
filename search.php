<?php get_header(); ?>
<?php _e( 'Résultats de recherche pour le terme', 'locale' ); ?>: "<?php the_search_query(); ?>" - nombre de résultats: <?php echo $wp_query->found_posts; ?>

    <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 

        // ICI LES RESULTATS

        // utilsation de type :
            //the_post_thumbnail_url();
            //the_permalink();
            //the_title();
            //the_excerpt(); =>debut de l'article ou description si existante

    endwhile;  
    else:  
        ?> 
        <!-- 2 Si pas de résultat --> 
        <!-- <h2>desolé, nous n'avons pas trouvé de resultat à votre recherche...</h2> -->
    <?php 
    endif;
    ?>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>