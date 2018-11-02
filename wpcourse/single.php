<?php get_header();?> 

    <main role="main" class="container">
      <div class="row">

        <div class="col-md-8 blog-main">
          
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the assignment
          </h3>
            <?php if (have_posts() ): ?>
              <?php while( have_posts() ) : the_post() ?>

                <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="<?php the_permalink();?> ">
              <?php the_title(); ?>
              </a>
             </h2>
              
            <p class="blog-post-meta"><?php the_time('F jS, Y');?> <a href="#"><?php the_author(); ?></a></p>

            <div class="blog-content">
              <?php the_content(); ?>

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


