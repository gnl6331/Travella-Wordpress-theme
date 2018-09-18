<?php
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'... <a class="more-link" href="'.$permalink.'">Lees meer</a>';
  return $excerpt;
}
add_theme_support( 'post-thumbnails' ); 
register_sidebar( array(
'name' => 'Voet widget',
'id' => 'voetwidget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="footer-position %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h1>',
'after_title' => '</h1>',
) );
function modify_contact_methods($profile_fields) {
	// Add new fields
	$profile_fields['vakantie'] = '*Vakantie bestemming';
	$profile_fields['leeftijd'] = '*Uw leeftijd';
    $profile_fields['beroep'] = '*Uw beroep';
    $profile_fields['reis'] = '*Uw soort reis (avontuurlijk, sociaal, duurzaam)';
	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');
$vakantieHandle = get_the_author_meta('vakantie');
$leeftijdHandle = get_the_author_meta('leeftijd');
$beroepHandle = get_the_author_meta('beroep');
$reisHandle = get_the_author_meta('reis');
?>