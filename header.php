<?php
$category = get_queried_object();
$this_slug = $category->slug;  // renvoi le slug DE LA PAGE
$this_id = $category->term_id; // renvoi l'ID DE LA PAGE
$this_name = $category->name;  // renvoi le name DE LA PAGE
if (!isset($this_name)||empty($this_name)) {
    $this_name = get_the_title();
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this_name; ?> | <?= get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="content">