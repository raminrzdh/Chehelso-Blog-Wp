<footer class=" px-md-4  bg-footer  shadow-sm-sm">
    <div class="container">
	<div class="row"> 
	 <div class="col-sm-6 my-3">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-2.svg" class="w-50" alt="chehelso" title="blog" />
      </div>
      
        
        <?php
$defaults = array(
	'theme_location'  => 'footer-menu-left',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => 'col-sm-3 col-6 footer-container',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="left-footer" class="my-3 text-right">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
wp_nav_menu( $defaults );

$defaults = array(
	'theme_location'  => 'footer-menu-right',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => 'col-sm-3 col-6 footer-container',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="right-footer" class="my-3 text-right">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
wp_nav_menu( $defaults );

?>

    </div>
	</div>
	<div class="container-fluid">
    <div class="row border-top-footer  pt-3">
      
      <div class="col-sm-3 text-center">
			<a href="https://www.instagram.com/chehelso">	<i class="fab fa-instagram fa-2x px-3"></i></a>
					<a href="https://www.chehelso.com/#"> <i class="fab fa-telegram fa-2x px-3"></i></a>
					 <a href="https://twitter.com/chehelso97"> <i class="fab fa-twitter fa-2x px-3"></i></a>
      </div>
	  <div class="col-sm-9 rtl">
        <p>
          تمامی حقوق مادی و معنوی این وبسایت متعلق به هوشمندسازان مسیر آینده می
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
