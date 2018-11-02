<?php get_header();?>


  
   <section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1><?php
                    if ( is_day() ) :
                        printf( __( 'Date: %s', 'styleguide' ), '' . get_the_date( get_option( 'date_format' ) ) . '' );
                    elseif ( is_month() ) :
                        printf( __( 'Month: %s', 'styleguide' ), '' . get_the_date( 'F Y' ) . '' );
                    elseif ( is_year() ) :
                        printf( __( 'Year: %s', 'styleguide' ), '' . get_the_date( 'Y' ) . '' );
                    elseif ( is_category() ) :
                        printf( __( 'Category: %s', 'styleguide' ), '' . single_cat_title( '', false ) . '' );
                    elseif ( is_tag() ) :
                        printf( __( 'Tag: %s', 'styleguide' ), '' . single_tag_title( '', false ) . '' );
                    elseif ( is_author() ) :
                        $curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );
                        printf( __( 'Author: %s', 'styleguide' ), $curauth->display_name );
                    else :
                        _e( 'Archive', 'styleguide' );
                    endif;
                    ?> </h1>
   		</div>   		
   	</div>
   </section>
   
			
   
   <!-- masonry
   ================================================== -->
   
   
   <section id="bricks" class="with-top-sep">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>
			 <?php if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); ?>
			 

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="<? the_permalink();?>" class="thumb-link">
					  <?php echo get_the_post_thumbnail();?>             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
                           <?php the_category(); ?>              				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="<?php the_permalink();?>"> <?php echo get_the_title();?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
						<?php the_excerpt();?>
						</div>
               </div>

        		</article> <!-- end article -->

            <?php	
	 endwhile;
		
		else : ?>
	<p><?php echo ( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

         </div> <!-- end brick-wrapper --> 
		 
		
   	</div> <!-- end row -->

   	<div class="row">
   		
   		<nav class="pagination">
		      <span class="page-numbers prev inactive">Prev</span>
		   	<span class="page-numbers current">1</span>
		   	<a href="#" class="page-numbers">2</a>
		      <a href="#" class="page-numbers">3</a>
		      <a href="#" class="page-numbers">4</a>
		      <a href="#" class="page-numbers">5</a>
		      <a href="#" class="page-numbers">6</a>
		      <a href="#" class="page-numbers">7</a>
		      <a href="#" class="page-numbers">8</a>
		      <a href="#" class="page-numbers">9</a>
		   	<a href="#" class="page-numbers next">Next</a>
	      </nav>

   	</div>


   </section> <!-- bricks -->
   

   
  <?php get_footer();?>