<?php get_header(); ?>
    <main>
        <?php query_posts('cat=2&showposts=4'); ?>
        <?php /* If there are no posts to display, such as an empty archive page */ ?>
        <?php if ( ! have_posts() ) : ?>
        <h1>Not Found</h1>
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
        <?php endif; ?>
 
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <div class="post-image">
                	<?php the_post_thumbnail(); ?>
            </div>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
                <?php echo get_excerpt(148); ?>
        </div>
            <?php endwhile; ?>
 
            <?php if ( $wp_query->max_num_pages > 1 ) : ?>
            <div id="older-posts"><?php next_posts_link('Older Posts'); ?></div>
            <div id="newer-posts"><?php previous_posts_link('Newer Posts'); ?></div>
            <?php else: ?>
            <?php endif; ?>
    </main>
<?php get_footer(); ?>
