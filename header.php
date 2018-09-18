<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name');?></title>
	<meta name="Author" content=""/>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="ieonly.css" />
    <![endif]-->
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <div id="top-wrapper">
        <div id="top">
            <a href="<?php bloginfo('url'); ?>"><img src="http://localhost/travella/wp-content/uploads/2015/01/logo.png"></a>
        </div>
    </div>
    <div id="nav-wrapper">
        <nav>
            <?php wp_nav_menu(); ?>
        </nav>
    </div>
    <header>
        <?php if ( function_exists( 'easingslider' ) ) { easingslider( 4 ); } ?>
    </header>