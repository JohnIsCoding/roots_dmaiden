<?php
/*
Template Name: Gallery
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    
        <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="span6" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
       
       <div class="image-container">
        <?php // get_sidebar(); ?>
                 <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
} 
?>

<img src="<?php echo $image[0]; ?>" class="page-feature-image" alt="David Maiden Self Portrait" />
</div>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    
    <?php roots_main_before(); ?>
      <div id="main" class="span5 offset1" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'gallery'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>

    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>