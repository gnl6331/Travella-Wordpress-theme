<?php /* Template name: Boeken pagina */ ?>  

<?php get_header(); ?>
<main>
<div class="content-full-width">
           <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
     </div>
    </main>
<?php get_footer(); ?>
