        <?php $recent = new WP_Query(); ?>
        <?php query_posts(array('post__not_in' => $ids)); ?>
        <?php $recent->query('cat=3&showposts=3'); ?>
        <?php while($recent->have_posts()) : $recent->the_post(); ?>
        
        <h1>De beste reizen door u gekozen</h1>    
        <div class="featured-travel-post">
            <h2><?php the_title(); ?></h2>
            <div class="featured-travel-post-image"><?php the_post_thumbnail(); ?></div>
            <a class="more-link" style="margin-top:10px;" href="<?php the_permalink() ?>">Meer informatie</a>
        </div>
        <?php endwhile; ?>
        




<?php
            include('inc/featured-travel.php');
        ?> 