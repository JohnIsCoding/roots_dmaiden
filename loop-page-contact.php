<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      
      <?php the_content(); ?>
      
      <?php $email = get_field('email_address');  if( $email ): ?>
     <p><?php echo $email; ?> </p>
      <?php endif; ?>
      
      <?php $twitter_handle = get_field('twitter_handle');  if( $twitter_handle ): ?>
     <p> <?php echo $twitter_handle; ?> </p>
      <?php endif; ?>
      
      
      
      
      
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>