<?php /* Start loop */ ?>

             <?php //query_posts( array( 'post_type' => 'gallery' )); ?>

<?php while (have_posts()) : the_post(); ?>


<?php

$images = get_field('gallery_entries');
 
if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p class="flex-caption"><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
 
    /*
    *  The following code creates the thumbnail navigation
    */
 
    ?>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; 
 
?>

<?php endwhile; /* End loop */ ?>