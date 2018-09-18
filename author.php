<?php get_header(); ?>

<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>

<main>
    <div class="authorWrapper">
        <div class="content-featured-travel-home">
                <h2 style="margin-bottom: 20px;">Het profiel van: <?php echo $curauth->nickname; ?></h2>
                <div class="authorAvatar2">
                        <?php userphoto_the_author_photo() ?>
                    </div>      
                    <h2>Over <?php echo $curauth->nickname; ?></h2>
                        <p><b>Naam: </b><?php echo $curauth->nickname; ?><br>
                        <b>Leeftijd: </b><?php echo $curauth->leeftijd; ?><br>
                        <b>Soort reis: </b><?php echo $curauth->reis; ?> backpacken<br>
                        <b>Op vakantie in: </b><?php echo $curauth->vakantie; ?></p>
                        <p><?php echo $curauth->user_description; ?></p>

                    <div class="clearfix"></div>


                    <h2 style="float:left; margin-bottom:20px;">Alle blogberichten</h2>
                    
                    <div class="clearfix"></div>
                    
                    <div class="travel-author-div">
                        <!– The Loop –>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 320,280 )); ?>
                            
                            
                            <div class="travel-info-block-author" style="background: url(<?php echo $src[0]; ?> ) no-repeat !important;">
                                <h1><?php the_title(); ?></h1>
                                <a class="travel-info-more-link" href="<?php the_permalink() ?>">Meer informatie</a>
                            </div>

                        <?php endwhile; else: ?>
                        <p><?php _e('No posts by this author.'); ?></p>

                        <?php endif; ?>

                        <!– End Loop –>

                    </div>            
        </div>
    </div>
</main>
<?php get_footer(); ?>