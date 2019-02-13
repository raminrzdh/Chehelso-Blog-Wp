<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/upw/carousel-swipe.js"></script> -->

<style>

#profile-grid { overflow: auto; white-space: normal; } 
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}

</style>
<div class="container-fluid px-0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
        <div class="carousel-inner row w-100 mx-auto upw-posts hfeed bg-blue border-bottom shadow-sm mb-3 py-4 bottom-slider" role="listbox">
          
            <?php if ($upw_query->have_posts()) : ?>

<?php $counter = 0; ?>

    <?php while ($upw_query->have_posts()) : $upw_query->the_post(); ?>
    
      <?php $current_post = ($post->ID == $current_post_id && is_single()) ? 'active' : ''; ?>
      <?php $current_post .= "carousel-item col-sm-3"; ?>
      
      <?php if ($counter == 0) : ?>
      <?php $current_post .= " active"; ?>
      <?php endif; ?>

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
      
    <?php $counter += 1; ?>

    <?php endwhile; ?>

<?php else : ?>

  <p class="upw-not-found">
    <?php _e('No posts found.', 'upw'); ?>
  </p>

<?php endif; ?>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<script language="javascript">
$('#myCarousel').on('slide.bs.carousel', function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#myCarousel').carousel({ 
                interval: 0
        });
  


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
  </script>

