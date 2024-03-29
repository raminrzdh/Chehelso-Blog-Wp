<?php get_header(); ?>

<div class="container-fluid px-sm-5">
  <div class="row right-content-start bd-highlight mb-3">


    <div class="col-sm-3 mt-4 px-4">
      <div class="row">
        <div class="col-sm-12 bg-blue card shadow-sm">
        <a href="http://chehelso.com" alt="فروشگاه اینترنتی چهلسو">  <div class="card-body">
            <p class="card-text text-right">
              فروشگاه اینترنتی چهلسو
              <i class="fas fa-angle-left"></i>
            </p>
            </a>
          </div>
        </div>

        <div class="col-sm-12  card shadow-sm mt-4">
          <div class="card-body text-center guide-buy-img">
            <p class="title-guide-buy">راهنمای خرید<p>
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('chl guide buy')) : ?>
                <?php endif; ?>
          </div>
        </div>


        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('chl text')) : ?>
        <?php endif; ?>

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('chl img ads')) : ?>
        <?php endif; ?>






      </div>
    </div>
    <div class="col-sm-9 mt-4 order-first order-md-last">
      
      <?php if ( is_active_sidebar( 'home_feature_post' ) ) : ?>
		  <?php dynamic_sidebar( 'home_feature_post' ); ?>
      <?php endif; ?>


      <div class="row">



        <?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true ); 




$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="col-sm-12 mt-4 ">
          <div class="card shadow-sm overhidden ">
            <div class="row card-horizontal rtl">
              <div class="col-md-4  order-first overhidden card-img-right">
                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium');} ?>
              </div>

              <div class="col-md-8">
                <div class="card-block p-3 right-content-start  ">
                  <h4 class="card-title  ">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?></a>
                  </h4>
                  <p class="card-text short-text-post">
                    <?php echo get_the_excerpt();?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-read-more">بیشتر</a>

                </div>
              </div>
            </div>
          </div>



        </div>
        <?php endforeach;  wp_reset_postdata();?>

        <div class="card rtl">

        </div>

      </div>

    </div>



  </div>
</div>
<?php if ( is_active_sidebar( 'home_bottom_slider' ) ) : ?>
          <?php dynamic_sidebar( 'home_bottom_slider' ); ?>
      <?php endif; ?>

</body>
<?php get_footer(); ?>