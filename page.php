<?php get_header(); ?> 
<h1 class="page_title"><?= the_title(); ?></h1>
<?= the_content(); ?>

<?php
$slug = basename(get_permalink());

// EXEMPLE INCLUDE EN FONCTION SLUG
/* if ( $slug === 'agenda' ) {
    get_template_part( 'template-parts/agenda' );
} */
?>

<?php get_footer(); ?>

