<?php get_header();?> 

    <main role="main" class="container">
      <div class="row">

        <div class="col-md-8 blog-main">
          
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the team
          </h3>
            <?php if (have_posts() ): ?>
              <?php while( have_posts() ) : the_post() ?>

                <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="<?php the_permalink();?> ">
              <?php the_title(); ?>
              </a>
             </h2>
              

            <div class="blog-content">

                <?php echo get_the_post_thumbnail(); ?>
              <?php the_content(); ?>
            
               <a href="<?php the_field('facebook'); ?>"><i class="fab fa-facebook fa-2x"></i></a> <br>
            <a href="<?php the_field('instragram'); ?>">instragram</a> <br>
          <a href=" tel:<?php the_field('phone_number'); ?>">Call Me</a>

            </div>

            
            


           
          </div><!-- /.blog-post -->


              <?php endwhile ?>
            <?php else : ?>
              <p>Oh No, there are no posts!</p>
              <?php endif?>
             <?php if(have_posts( ) ):
             endif; ?> 

          

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

    </main><!-- /.container -->
       
<?php get_footer();?>


