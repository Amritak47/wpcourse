 
<?php
    /*Template Name:Contact Template */
 ?>

<?php get_header(); ?>
 <!-- content
 
   ================================================== -->
   <section id="content-wrap" class="site-page">
   	<div class="row">
   		<div class="col-twelve">

   			<section>  
               <?php if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); 
				?>
                <?php the_content();?>
   				<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');?>
                <?php
				endwhile;
				
				else : ?>
				<p><?php echo ( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

				</section>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->		
   </section> <!-- end content -->

   

<?php get_footer(); ?>