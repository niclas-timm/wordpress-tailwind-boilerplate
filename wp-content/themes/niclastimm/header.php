<!DOCTYPE html>
<html lang="en">

    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <script src="https://kit.fontawesome.com/7ba8bfe10f.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
        <title><?php the_title(); ?></title>
        <link rel="icon">
    </head>

    <body <?php body_class(); ?>>