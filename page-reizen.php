<?php /* Template name: Reizen Pagina */ ?>  

<?php get_header(); ?>
<main>
<div class="content-full-width">
           <h1 style="margin-bottom:20px;">Door ons gekozen reizen naar:</h1>
                <?php query_posts('cat=7&showposts=9'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 320,280 ));
                ?>


        
    
    
        <div class="travel-info-block" style="background: url(<?php echo $src[0]; ?> ) no-repeat !important;">
            <h1><?php the_title(); ?></h1>
            <a class="travel-info-more-link" href="<?php the_permalink() ?>">Meer informatie</a>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
     </div>
    </main>
<?php get_footer(); ?>
