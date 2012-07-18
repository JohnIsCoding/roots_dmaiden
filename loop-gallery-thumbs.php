<?php /* Start loop */ ?>

             <?php query_posts( array( 'post_type' => 'gallery' )); ?>


<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>

<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
/*    echo '<li><a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >'; */

    echo '<li><a href="#" alt="' . the_title_attribute('echo=0') . '" title="' . the_title_attribute('echo=0') . '" >'; 


$attr_args = array(
			
			'class'	=> "gallery-thumb",
			'alt'	=> trim(strip_tags( $post->post_title )),
			'title'	=> trim(strip_tags( $post->post_title )),
		);


   echo get_the_post_thumbnail($post->ID, 'thumbnail-small', $attr_args); 
   echo '</a></li>';
 }
?>


    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>