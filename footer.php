
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <?php roots_footer_inside(); ?>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    
    <div class="row">
   
   <div class="span5"> 
	   
	   
	   <div class="location">
	    <ul class="tagline">
      <li class="desc">London</li>
      <li class="desc">Mombassa</li>
      </ul>
      </div>
	   
	   
	<?php query_posts( array( 'pagename' => 'contact' )); ?>
	   <?php while (have_posts()) : the_post(); ?>
	   
	        <?php $email = get_field('email_address');  if( $email ): ?>
     <div class="row"><address><div class="contact_field span1"><small>Email:</small></div> <div class="span2">
     
     <a href="mailto:<?php echo $email; ?>"alt="<?php echo $email; ?>"><small><?php echo $email; ?></small></a></div>
     
     </address></div>
      <?php endif; ?>
	   
	   <?php endwhile; /* End loop */ ?>


	   
   </div> 
    
    <div class="span4 offset3"> <p class="copy"><small>&copy; <span class="copydate"><?php echo date('Y'); ?></span> <?php bloginfo('name'); ?></small></p></div>
    
    </div>
    
  
  
  
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>



</html>