<?php add_theme_support('menus');
function register_my_menus() {
    register_nav_menus(
    array(
    'top-menu' => __( 'navbar' ),
    'main-menu' => __( 'sidebar' ),
    'footer-menu-right' => __( 'right footer' ),
    'footer-menu-left' => __( 'left footer' )
    )
    );
    }
    add_action( 'init', 'register_my_menus' );
    

 add_theme_support( 'post-thumbnails' );
if ( function_exists('register_sidebar') ){
 	 register_sidebar( array(
        'name' => __( 'chl text', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
       'before_widget' => '<div class="col-sm-12 p-0  card shadow-sm mt-4"> <div class="card-body text-right">',
		'after_widget' => '</div></div>',
        'before_title' => '',
        'after_title' => '',
    ) );
 
    register_sidebar( array(
   'name' => __( 'chl img ads', 'wpb' ),
        'id' => 'sidebar-2',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
       'before_widget' => '<div class="col-sm-12 p-0 card shadow-sm mt-4"> <div class="card widget-full-image text-center">',
		'after_widget' => '</div></div>',
        'before_title' => '',
        'after_title' => '',
    ) );
	
	register_sidebar( array(
        'name' => __( 'chl guide buy', 'wpb' ),
        'id' => 'sidebar-3',
        'description' => __( 'ont page template', 'wpb' ),
		'class' => 'col-7',
		'before_widget' => '',
		'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
	
    ) );

    register_sidebar( array(
		'name'          => 'Home feature post',
		'id'            => 'home_feature_post',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    
    register_sidebar( array(
		'name'          => 'Home Bottom Slider',
		'id'            => 'home_bottom_slider',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
?>