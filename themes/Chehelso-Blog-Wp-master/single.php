<?php get_header(); ?>
 
    <div class="container ">
      <div class="row ">
         <div class="col-sm-3 ">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('chl text')) : ?>
        <?php endif; ?>

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('chl img ads')) : ?>
        <?php endif; ?>
        </div>
		<div class="col-sm-9 mt-3">
         <div class="row">
            <div class="col-sm-12 ">
              <div class="card ">
                
                 
				  
				 
 	<?php while(have_posts()) : the_post(); ?>
		              
			<h2 class="post-title  text-right p-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<p class="meta p-1  text-right ">نوشته  <a href="#"><?php the_author_posts_link(); ?></a> زمان <?php the_time('F jS, Y'); ?>
			&nbsp;&bull;&nbsp; <a href="<?php comments_link(); ?>" class="comments">
			<?php comments_number('0 نظر','1 نظر','% responses'); ?>
		</a> &nbsp;&bull;&nbsp;  </p>
			<div class="entry p-4  text-right "> <a href="<?php the_permalink(); ?>" class="image image-full">
				<?php the_post_thumbnail('medium'); ?>
			</a>
				<div class="card-text rtl text-right "><?php the_content('Read More'); ?></div>
			</div>
	 
	<?php endwhile; ?>
	<?php comments_template(); ?>
	
	 
          
			  </div>
			  			  </div>
           
             
          </div>
        </div>
       h
      </div>
    </div>
    <div class="bg-blue border-bottom shadow-sm-sm">
      <div class="row container">
        <div class="col-sm-5">
           <ul>
          <!---   <li class="storyboard">
<img src="<?php bloginfo('template_url'); ?>/_text.png" class="rounded-circle" alt="title_post">
           </li>--->
           </ul>
             
        </div>
      </div>
    </div>
  </body>
  
	
	
	
  
<?php get_footer(); ?>