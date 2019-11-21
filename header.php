<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!--Link to Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:300,400,500,600,700" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="container">
        <div class="row">

          <!-- logo -->
          <div class="three columns">
            <?php if(get_header_image() == ''){?>
              <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1><?php
            }else{?>
              <a href="<?php $url = home_url('/'); echo $url; ?>">
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" />
              </a>
              <?php
            } ?>
          </div>

          <!--navigation-->
          <div class="seven columns">
            <?php wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container-class' => 'menu-header'
            )); ?>
          </div>

          <!-- search bar -->
          <div class="two columns">
            <?php dynamic_sidebar('right-header'); ?>
          </div>
        </div> <!--Row Close -->

      </div> <!--Container close -->

    </header>
