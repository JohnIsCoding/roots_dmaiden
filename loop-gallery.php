<?php /* Start loop */ ?>

             <?php query_posts( array( 'post_type' => 'gallery' )); ?>


<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <?php // the_content(); ?>
     
 
       <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail-small'); ?></a>

     
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>