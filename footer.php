<footer class=" px-md-4  bg-footer  shadow-sm-sm">
    <div class="container">
	<div class="row">
	 <div class="col-sm-6 my-3">
        <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="w-40" alt="chehelso" title="blog" />
      </div>
      <div class="col-sm-3">
        <ul class="my-3  footer-font-color text-right ">
          <li><a class="footer-font-color" href="#">چطور</a></li>
          <li><a class="footer-font-color" href="#">چطور</a></li>
          <li><a class="footer-font-color" href="#">چطور</a></li>
          <li><a class="footer-font-color" href="#">چطور</a></li>
        </ul>

        <!-- <h5 class="my-0 d-flex ml-20 mr-md-auto font-weight-normal">chehelso blog</h5> -->
      </div>
      <div class="col-sm-3">
        <ul class="my-3 footer-font-color text-right">
      
        <?php

$defaults = array(
	'theme_location'  => 'footer-menu',
	'menu'            => '',
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
        </ul>
      </div>
     
    </div>
	</div>
	<div class="container">
    <div class="row border-top  pt-3">
      
      <div class="col-sm-3 text-center">
          <i class="fab fa-instagram fa-2x px-3"></i> <i class="fab fa-telegram fa-2x px-3"></i> <i class="fab fa-twitter fa-2x px-3"></i>
      </div>
	  <div class="col-sm-9 text-right">
        <p>
          تمامی حقوق مادی و معنوی این وبسایت متعلق بهوشمندسازان مسیر آینده می
          باشد و هر گونه کپی برداری پیگرد قانونی دارد.
        </p>
      </div>
    </div>
	  </div>
    
  </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>
</html>
