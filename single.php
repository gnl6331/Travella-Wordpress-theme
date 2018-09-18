<?php get_header(); ?>
<main>
    
<div class="content-full-width">
    
            <?php
                if ( in_category( array ('3', '7', '5' ) ) ) {
	               include 'single-cat-featuredtravel.php';
                } 
                elseif ( in_category( array ('12','19','33') ) ) {
	               include '/single-normal.php';
                }  
                else {
	               include '/single-normal.php';
                }
            ?>
            
     </div>
    </main>
<?php get_footer(); ?>
