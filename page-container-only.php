<?php
/*
Template Name: Container Only
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    
        <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="span6" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php // get_sidebar(); ?>
                 <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail();
} 
?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    
    <?php roots_main_before(); ?>
      <div id="main" class="span5 offset1" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page-container-only'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>

    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>