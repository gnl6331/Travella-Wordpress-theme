<?php /* Template name: Homepage Template */ ?>  	

<?php get_header(); ?>
<main>    
    <div class="content-full-width">
        <h1>De beste reizen door u gekozen</h1>
        <?php query_posts('cat=3&showposts=3'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="featured-travel-post">
            <h2><?php the_title(); ?></h2>
            <div class="featured-travel-post-image"><?php the_post_thumbnail(); ?></div>
            <a class="more-link" style="margin-top:10px;" href="<?php the_permalink() ?>">Meer informatie</a>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
        
        
        
        <?php if (have_posts()) : while (have_posts()) : the_post();?>    
        <h1><?php the_title(); ?></h1>   
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        
        <h1 style="margin: 10px 0px 20px 0px;">Top Bestemmingen</h1>
        <?php query_posts('cat=5&showposts=4'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 320,220 ));
        ?>
        <div class="best-destinations" style="background: url(<?php echo $src[0]; ?> ) no-repeat !important;">
            <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
 
        
        
          
        
        
        
        
        
     </div>
</main>

        

       
        
      


<?php get_footer(); ?>

        



