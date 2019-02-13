

<!-- <div class="container-fluid px-0"> -->
        <div class="carousel  upw-posts hfeed bg-blue border-bottom shadow-sm mb-3 py-4 bottom-slider" data-flickity='{ "wrapAround": true , "pageDots": false}'  >
          <!-- <div class="flickity-viewport">
            <div class="flickity-slider "> -->
            <?php if ($upw_query->have_posts()) : ?>

    <?php while ($upw_query->have_posts()) : $upw_query->the_post(); ?>
    
      <?php $current_post = ($post->ID == $current_post_id && is_single()) ? 'active' : ''; ?>
      <?php $current_post .= "carousel-cell "; ?>

      <article <?php post_class($current_post); ?>>
        
        <header>

          <?php if (current_theme_supports('post-thumbnails') && $instance['show_thumbnail'] && has_post_thumbnail()) : ?>
            <div class="entry-image text-center guide-buy-img">
              <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php          
                $post_thumbnail_id = get_post_thumbnail_id();
                $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                ?>              
                <img title="image title" alt="thumb image" class="card-img-top img-fluid mx-auto d-block" src="<?php echo $post_thumbnail_url; ?>">
              </a>
            </div>
          <?php endif; ?>

          <?php if (get_the_title() && $instance['show_title']) : ?>
            <h4 class="entry-title text-right">
              <a class="slider-post-title rtl" href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
              </a>
            </h4>
          <?php endif; ?>

        </header>
      </article>
      
    <?php endwhile; ?>

<?php else : ?>

  <p class="upw-not-found">
    <?php _e('No posts found.', 'upw'); ?>
  </p>

<?php endif; ?>

        <!-- </div>
</div> -->
</div>
<!-- </div> -->
<script>
  $('.main-carousel').flickity({
  cellAlign: 'left',
  contain: true
});
</script>

