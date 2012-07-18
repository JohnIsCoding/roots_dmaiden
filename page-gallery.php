<?php
/*
Template Name: Gallery
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    
    
       
   
   <?php /* Start loop */ ?>

<?php while (have_posts()) : the_post(); ?>


<?php 		$images = get_field('gallery_entries');  if( $images ): ?>
   

        <div id="slides">
            
            
            <div class="slides_container span6">
               

            <?php foreach( $images as $image ): ?>
             <div class="slide">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
                    <div class="caption"><?php echo $image['title']; ?></div>
                </div>
            <?php endforeach; ?>
  
            
            </div> <!-- .slides_container -->
       
        <div class="span5 offset1">
        <ul class="slides_pagination">

    <?php //The following code creates the thumbnail navigation ?>
    
  
            <?php foreach( $images as $image ): ?>
                <li>
                    <a href="#"><img src="<?php echo $image['sizes']['thumbnail-small']; ?>" alt="<?php echo $image['title']; ?>" /></a>
                </li>
            <?php endforeach; ?>






        </ul>
       </div> <!-- .pagination -->
       
       
        </div> <!-- #slides -->
 
 
 <?php endif; 
 
?>

<?php endwhile; /* End loop */ ?>
 

    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>