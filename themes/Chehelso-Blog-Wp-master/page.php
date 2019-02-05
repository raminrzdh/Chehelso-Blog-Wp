<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
 
  
 	
	  
  <body class="bg-color">
    <div class="container mt-4">
      <div class="row d-inline-flex right-content-start bd-highlight mb-3">
        <div class="col-sm-12">
         <div class="row">
            <div class="col-sm-12 ">
              <div class="card p-4 text-right">
                
                 

				 
 	 
	<?php while(have_posts()) : the_post(); ?>
		<div class="post rtl">
			<h2 class="title"><?php the_title(); ?></h2>		
				<?php the_content('Read More'); ?>
			</div>
		</div>
	<?php endwhile; ?>
 
	 
          
			  </div>
			  			  </div>
           
             
          </div>
        </div>
       
      </div>
    </div>
     </body>
  
	
	
	
 
<?php get_footer(); ?>