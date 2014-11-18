<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
remove_action('wp_head', 'wp_generator');
if (is_singular() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}
wp_head();
?>
</head>
<body <?php body_class(); ?>>

<div id="main">
    <div class="sheet clearfix">

<?php if(theme_has_layout_part("header")) : ?>
<header class="clearfix header<?php echo (theme_get_option('theme_header_clickable') ? ' clickable' : ''); ?>">

    
    
<div class="header-sidebar">
<?php get_sidebar('header'); ?>
</div>
    
    <div class="shapes">
<?php if(theme_get_option('theme_header_show_headline')): ?>
	<?php $headline = theme_get_option('theme_'.(is_home()?'posts':'single').'_headline_tag'); ?>
	<<?php echo $headline; ?> class="headline" data-left="66.08%">
    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
</<?php echo $headline; ?>>
<?php endif; ?>
<?php if(theme_get_option('theme_header_show_slogan')): ?>
	<?php $slogan = theme_get_option('theme_'.(is_home()?'posts':'single').'_slogan_tag'); ?>
	<<?php echo $slogan; ?> class="slogan" data-left="61.69%"><?php bloginfo('description'); ?></<?php echo $slogan; ?>>
<?php endif; ?>


            </div>
<div class="textblock object1287894968" data-left="95.71%">
    <?php get_search_form() ?>
</div>
                
                    
</header>
<?php endif; ?>

<nav class="nav clearfix">
    <?php
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_menu_source'),
			'depth' => theme_get_option('theme_menu_depth'),
			'menu' => 'primary-menu',
			'class' => 'hmenu'
		)
	);
?> 
    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout">
                    <div class="content-layout-row">
                        <div class="layout-cell content clearfix">
