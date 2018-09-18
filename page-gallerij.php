<?php /* Template name: Gallerij pagina template */ ?>  	

<?php get_header(); ?>
<main>    
    <div class="content-full-width">
        <h1>De beste reizen door u gekozen</h1>
        <?php query_posts('cat=3&showposts=10'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="featured-travel-post">
            <h2><?php the_title(); ?></h2>
            <div class="featured-travel-post-image"><?php the_post_thumbnail(); ?></div>
            <a class="more-link" style="margin-top:10px;" href="<?php the_permalink() ?>">Meer informatie</a>
        </div>
        <?php endwhile; ?>
        
     
<?php endif; ?>
        
        
     </div>
</main>

        

       
        
      


<?php get_footer(); ?>

        



