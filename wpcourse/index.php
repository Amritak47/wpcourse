<?php get_header();?>
<?php
    $args = array(
        'posts_type' => 'post',
        'cat' => 20,
        'posts_per_page' => 5
    );
    $posts_new = new WP_Query( $args );
    ?>
    <?php
    if (  $posts_new->have_posts() ) :
        while (  $posts_new->have_posts() ) :
             $posts_new->the_post();
            ?>
                <div class="new-post">
                  <?php the_title(); ?>
                </div>
            <?php endwhile; ?>
                <?php else : ?>
                    <h1>No posts here!</h1>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <div class=containertop>
    <?php
    $args = array(
        'posts_type' => 'post',
        'cat' => 20,
        'posts_per_page' => 5
    );
    $posts_new = new WP_Query( $args );
    ?>
    <?php
    if (  $posts_new->have_posts() ) :
        while (  $posts_new->have_posts() ) :
             $posts_new->the_post();
            ?>
                <div class="new-post">
                  <?php the_title(); ?>
                </div>
            <?php endwhile; ?>
                <?php else : ?>
                    <h1>No posts here!</h1>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
          
    </div>

    <main role="main" class="container">
      <div class="row">

        <div class="col-md-8 blog-main">
          
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
            <?php if (have_posts() ): ?>
              <?php while( have_posts() ) : the_post() ?>

                <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="<?php the_permalink();?> ">
              <?php the_title(); ?>
              </a>
             </h2>

            <div class=slider>
               <div>your content</div>
                <div>your content</div>
                <div>your content</div>
            </div>
             
            <p class="blog-post-meta"><?php the_time('F jS, Y');?> <a href="#"><?php the_author(); ?></a></p>

            <div class="blog-content">
              <?php the_content('continue reading'); ?>
              

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


