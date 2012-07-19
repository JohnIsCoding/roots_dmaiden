<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main_home" class="span12 home_image" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page-container-only'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->



    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>