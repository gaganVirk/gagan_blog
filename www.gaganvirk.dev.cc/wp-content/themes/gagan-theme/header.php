<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <?php wp_head(); ?>
	</head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<body <?php body_class(); ?>>
	  <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url() ?>"><strong>Gagan</strong> Virk</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
          <!--  <?php
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              ));
            ?> -->
           <ul>
              <li> <a href="<?php echo site_url('/projects') ?>">Projects</a></li>
              <li><a href="<?php echo site_url('/contact-me') ?>">Contact Me</a></li>
              <li <?php if(get_post_type() == 'book' OR is_page('books')) echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('book'); ?>">Books</a></li>
              <li><a href="<?php echo site_url('/certificates') ?>">Certificates</a></li>
              <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            </ul>
          
          </nav>
          <div class="site-header__util">
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
	