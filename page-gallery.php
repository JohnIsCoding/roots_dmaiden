<?php
/*
Template Name: Gallery
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    
    
       
       
                        <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
} 
?>
       
   

        <div id="slides">
            
            
            <div class="slides_container span6">
               
               
                <div>
                    <img src="http://placehold.it/570x570/0064cd/fff" alt="one" />
                </div>
                <div>
                    <img src="http://placehold.it/570x570/c3325f/fff" alt="two" />
                </div>
                <div>
                    <img src="http://placehold.it/570x570/ffc40d/fff" alt="three" />
                </div>
                    <div>
                    <img src="http://placehold.it/570x570/46a546/fff" alt="four" />
                </div>
            </div> <!-- .slides_container -->
       
        <div class="span5 offset1">
        <ul class="slides_pagination">
        			<li><a href="#"><img src="http://placehold.it/70/0064cd/fff" width="70" alt="one"></a></li>
					<li><a href="#"><img src="http://placehold.it/70/c3325f/fff" width="70" alt="two"></a></li>
					<li><a href="#"><img src="http://placehold.it/70/ffc40d/fff" width="70" alt="three"></a></li>
					<li><a href="#"><img src="http://placehold.it/70/46a546/fff" width="70" alt="four"></a></li>

        </ul>
       </div> <!-- .pagination -->
       
       
        </div> <!-- #slides -->
 

    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>