<?php get_header(); ?> 
<h1 class="single_title"><?= the_title(); ?></h1>
<?php
$catsection =  get_the_category(); 
$numcat0 = $catsection[0]->cat_name ; // renvoi nom de categorie (la premiere si plusieurs)
?>
<?= the_content(); ?>

<?php $categories = get_the_category($post->ID); ?>
<?php if ($categories): ?>
  <?php $category_ids = array(); ?>
  <?php foreach($categories as $individual_category) : ?>
    <?php $category_ids[] = $individual_category->term_id; ?>
  <?php endforeach; ?>
  <?php  $args=array(
  'category__in' => $category_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=>3,
  'ignore_sticky_posts'=>1,
  'oderby' => 'rand'
  );?>
  <?php  $my_query = new WP_Query($args); ?>
  <?php  if( $my_query->have_posts() ) : ?>
  <section class="related_posts">
    <h2>Projets qui pourraient vous intéresser :</h2>
    <ul>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li>
        <div>
          <a href="<?php the_permalink()?>"><?php the_post_thumbnail('medium_large'); ?></a>
          <h4 class="title-like"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>
        </div>
      </li>
    <?php  endwhile;?>
    </ul>
  </section>
  <?php endif; ?>
  <?php wp_reset_query();?>
<?php endif; ?>

<?php get_footer(); ?>