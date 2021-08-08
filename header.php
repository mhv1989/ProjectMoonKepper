<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(  ); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.ico">
    <?php wp_head(); ?>

</head>
<body <?php body_class() ?>>
<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark rtl ta-r">
      <a class="navbar-brand ff-IB fs-16" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php $args = array(
                        'menu' => 'header-menu',
                        'menu_class' => 'navbar-nav mr-auto',
                        'menu_id' => '',
                        'container' => 'false'
                        );
                wp_nav_menu($args);
        ?>
      </div>
    </nav>
  </div>
</header>