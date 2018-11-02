
    <?php get_header();?>
   <!-- content
   ================================================== -->
   <section id="content-wrap" class="site-page">
   	<div class="row">
   		<div class="col-twelve">
          <?php
           while ( have_posts() ) : the_post(); 
				?>
   			<section>  


   				<div class="content-media">						
                   <?php echo get_the_post_thumbnail(); ?>						  
				</div>

					<div class="primary-content">

                        <?php the_content();?>

						
							</div>

						</div>

					</div>						

				</section>  		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->
		
   </section> <!-- end content -->
   <?php
				endwhile;
				
				 ?>
			
 <?php get_footer(); ?>