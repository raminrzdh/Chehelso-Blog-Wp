<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    <?php bloginfo('title'); ?>
  </title>
</head>

<body class="bg-color">
  <nav class="navbar navbar-expand-lg  header-bg">
    <div class="container text-right">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="#" class="text-dark">
              <i class="fa fa-user-circle fa-2x px-2"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="text-dark"> <i class="fa fa-search fa-2x px-2"></i></a>

          </li>
        </ul>


        <?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => 'topـmenu',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'p-2 text-dark',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="menu-main-menu" class="navbar-nav mr-auto menu-style menu">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
        <!--  <ul class="navbar-nav mr-auto">
             <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul> -->

      </div>
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>"> <img src="<?php bloginfo('template_url'); ?>/img/logo.png"
          class="w-60" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>