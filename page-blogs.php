<?php
/* Template name: Blog's Template */

// Get all users order by amount of posts
$allUsers = get_users('orderby=post_count&order=DESC');

$users = array();

// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $currentUser)
{
	if(!in_array( 'subscriber', $currentUser->roles ))
	{
		$users[] = $currentUser;
	}
}

?>

<?php get_header(); ?>
<main>
<div class="content-full-width">
           <h1 style="margin-bottom:20px;"><?php the_title(); ?></h1>
            <?php
		

		foreach($users as $user)
		{
			?>
    
    
    
			<div class="author-pg">
				<div class="authorAvatar">
					<?php
                        if(userphoto_exists($user))
                        userphoto($user);
                        else
                        echo get_avatar($user->ID, 96);
                    ?>
				</div>
				<div class="authorInfo">
					<h2 class="authorName">Volg mijn reis in <?php echo get_user_meta($user->ID, 'vakantie', true); ?></h2>
					<p><b>De blog van: </b><?php echo $user->user_firstname; ?> <?php echo $user->user_lastname; ?><br>
                    <b>Op vakantie in: </b><?php echo get_user_meta($user->ID, 'vakantie', true); ?><br>
                    <b>Leeftijd: </b><?php echo get_user_meta($user->ID, 'leeftijd', true); echo '&nbspJaar'; ?><br>
                    <b>Hoofdberoep: </b><?php echo get_user_meta($user->ID, 'beroep', true); ?></p>
					<a class="more-link" href="<?php echo get_author_posts_url( $user->ID ); ?>">Bekijk alle berichten</a>

					
				</div>
			</div>
			<?php
		}
	?>
     </div>
    </main>
<?php get_footer(); ?>
