<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <?php if (is_front_page()): ?>
      <div class="header-banner">
        <div>
          <img src="<?php echo get_theme_mod( 'hb_image_setting'); ?>" class="img-responsive">
        </div>
      </div>
      <?php endif; ?>
      <?php if (is_page_template( 'front-page-car.php' )): ?>
      <div class="header-banner">
        <div>
          <img src="<?php echo get_theme_mod( 'cb_image_setting' ); ?>" class="img-responsive">
        </div>
      </div>
      <?php endif; ?>
      <div class="content row">
        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar row" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>


