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
   





        <div id="slides" class="row">
            
                       
            <div class="slides_container span12">
               
            <?php foreach( $images as $image ): ?>
             <div class="slide">
                  
          <div class="span6">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
                    </div>
                                      <div class="caption span5 offset1"><em><?php echo $image['title']; ?></em>
                                      <?php //replace the serif x with the nicer-looking &times; ?>
                                      <?php $replace = str_replace("x", "&times;", $image['description']); ?>
                                      <p><?php echo $replace ?></p></div>



                </div> <!-- .slide -->
            <?php endforeach; ?>
            
            
  
            
            </div> <!-- .slides_container -->
       
        <div id="pagination_container" class="span5 offset7">

        <ul class="slides_pagination">
                                              
    <?php //The following code creates the thumbnail navigation ?>
    
            <?php foreach( $images as $image ): ?>
                <li>
                    <a href="#"><img src="<?php echo $image['sizes']['thumbnail-small']; ?>" alt="<?php echo $image['title']; ?>" /></a>
                </li>
            <?php endforeach; ?>
        </ul>

       </div> <!-- .span5 offset1 -->
       
       
        </div> <!-- #slides -->
 
 
 <?php endif; 
 
?>

<?php endwhile; /* End loop */ ?>
 

    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>