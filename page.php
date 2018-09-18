<?php get_header(); ?>
<main>
<div class="content-full-width">
    <div class="content-featured-travel-home">
        
           <h1><?php the_title(); ?></h1>
        <div class="clearfix" style="padding:10px;"></div>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
     </div>
    </div>
    </main>
<?php get_footer(); ?>
