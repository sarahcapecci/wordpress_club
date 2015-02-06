<?php get_template_part('templates/head'); ?>
<style>
  body {
    font-family: 'Lato', sans-serif;
  }
  .wrap {
    padding: 0 40px;
  }

  .nav li {
    display: inline-block;
    padding: 5px;
  }

  .margin-t-20 {
    margin: 20px 0;
  }
  .margin-t-10 {
    margin: 10px 0;
  }
  .block {
    display: block;
  }

  .pointer {
    cursor: pointer;
    color: blue;
  }

  #selected-dog {
    display: none;
  }
  
</style>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
    <div class="content">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
