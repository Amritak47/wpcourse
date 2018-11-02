
<div class="prefooter">
<div class="container">
  <div class="row">
    <div class="col-sm">
      
      <?php dynamic_sidebar('amrit-sidebar'); ?>
    </div>
    <div class="col-sm">
    <?php dynamic_sidebar('nejit_sidebar'); ?>
      
    </div>
    <div class="col-sm">
    <?php dynamic_sidebar('nejit_sidebar1'); ?>
    </div>
  </div>
</div>
</div>
<footer class="blog-footer">
<div class="container">
<?php //dynamic_sidebar('my-sidebar'); ?>
        <?php dynamic_sidebar('my-sidebar'); ?>
        <?php wp_nav_menu( array( "theme_location" => 'menu' ) ) ?>

      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"    ></script>

<?php wp_footer();?>
</body>
    
</html>