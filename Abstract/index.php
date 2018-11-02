<?php get_header(); ?>


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/featured/featured-1.jpg);"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>September 06, 2016</li> 
												<li><a href="#" >Naruto Uzumaki</a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="<?php the_permalink();?>" title="">Minimalism Never Goes Out of Style</a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/featured/featured-2.jpg);"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 29, 2016</li>
												<li><a href="#">Sasuke Uchiha</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="<?php the_permalink();?>" title=""></a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/featured/featured-3.jpg);"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 27, 2016</li>
												<li><a href="#" class="author">Naruto Uzumaki</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="<?php the_permalink();?>" title=""></a></h1>
						   			</div>

				   				</div>
				   			</li> <!-- end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>
			
			<?php if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); 
				?>
					<article class="brick entry format-standard animate-this">
					
						<div class="entry-thumb">
							<a href="<?php the_permalink();?>" class="thumb-link">
								<?php echo get_the_post_thumbnail(); ?>
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<?php the_category(); ?>           				
									</span>			
								</div>

								<h1 class="entry-title"><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h1>
								
							</div>
								<div class="entry-excerpt">
									<?php the_excerpt(); ?>
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
		   	<a href="<?php the_permalink();?>" class="page-numbers">2</a>
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

   </section> <!-- end bricks -->

   
  <?php get_footer(); ?>