<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      
      <?php the_content(); ?>
      <div class="row">
      <div class="contact_info span5">
      <?php $email = get_field('email_address');  if( $email ): ?>
     <div class="row"><address><span class="contact_field span2">Email:</span> <a href="mailto:<?php echo $email; ?>"alt="<?php echo $email; ?>"><?php echo $email; ?></a></address></div>
      <?php endif; ?>
      
      <?php $twitter_handle = get_field('twitter_handle');  if( $twitter_handle ): ?>
    <div class="row"> <address><span class="contact_field span2">Twitter:</span> <a href="http://www.twitter.com/<?php echo $twitter_handle; ?>" alt="<?php echo $twitter_handle; ?>"> <?php echo $twitter_handle; ?></a> </address></div>
      <?php endif; ?>
      
      
            <?php $facebook_link = get_field('facebook_link');  if( $facebook_link ): ?>
    <div class="row"> <address><span class="contact_field span2">Facebook:</span> <a href="<?php echo $facebook_link; ?>" alt="Visit my Facebook page"> David Maiden</a> </address></div>
      <?php endif; ?>
      </div> <!-- .contact_info -->
      </div> <!-- .row -->
      
      
      
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>