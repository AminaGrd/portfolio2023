<?php get_header(); ?> 
<h1 class="single_title"><?= the_title(); ?></h1>
<?php
$catsection =  get_the_category(); 
$numcat0 = $catsection[0]->cat_name ; // renvoi nom de categorie (la premiere si plusieurs)
?>

<?php get_footer(); ?>