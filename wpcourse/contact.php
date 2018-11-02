<?php
    /*Template Name:Contact Template */
 ?>

<?php get_header();?> 

    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14136.957469810657!2d85.2959632232562!3d27.64806498268238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb178514f97739%3A0xeb1f6e5c822e62ab!2sBhaisepati%2C+Karyabinayak!5e0!3m2!1sen!2snp!4v1538744238284" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <main role="main" class="container">
      <div class="row">

        <div class="col-md-8 blog-main">
          
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Page
          </h3>
          <h4> <?php  the_field('phone_number'); ?></h4>

              <?php while( have_posts() ) : the_post() ?>

                <div class="blog-post">
                    <h2 class="blog-post-title">
                    
                    <?php the_title(); ?>
                    
                    </h2>
                    

                    <div class="blog-content">
                    <?php the_content(); ?>
                    
                

                    </div>




                
                </div><!-- /.blog-post -->

              <?php endwhile; ?>

          

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        <div class=slider>
        <?php wp_reset_postdata(); ?>

<?php
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => 10,
    );
    $team = new WP_Query( $args );
        ?>
<?php
if ( $team->have_posts() ) :
    while ( $team->have_posts() ) :
        $team->the_post();
        ?>
            <div class="team">
                <h2><?php the_title(); ?></h2>
                <?php echo get_the_post_thumbnail(); ?>
            </div>
        <?php endwhile; ?>
            <?php else : ?>
                <h1>No posts here!</h1>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
        </div>

        </div><!-- /.blog-main -->
       

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

    </main><!-- /.container -->
       
<?php get_footer();?>


