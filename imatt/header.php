<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
	<!-- Meta Images -->
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory') . '/favicon.ico';?>" type="image/x-icon">	
	<!-- Meta -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<meta name="generator" content="WordPress.com" />
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . '/core/wp_core.css';?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/postbox.js"></script>


	</head>
<body>

<div id="page" class="fix" style="">
  <div id="wrapper" class="fix" >
    <div id="header" class="fix">
      		<h1 id="blogtitle"><a href="<?php bloginfo('name'); ?>"><span class="sheen"></span><img src="<?php echo get_bloginfo('template_directory') . '/images/bookit_bg_v2.png';?>" alt ="<?php bloginfo('name'); ?>" /></a></h1>
      		<div id="blogdescription"><?php bloginfo('description'); ?></div>
		<div class="icons">
			<!--<div class="nav-icon">
					<a href="http://xp-racy.lan/bookit/?feed=rss2"><img class="pngbg" src="bookIt_files/rss.png" alt="icon"></a>
				</div>-->
		</div><!-- /end iphone icons -->
	</div><!-- /header -->

<div id="nav" class="fix">
	<ul class="fix dropdown">
		<li class="page_item navfirst">
			<a class="home" href="<?php echo get_settings('home'); ?>/" title="Home" style="background-image: url('<?php echo get_bloginfo('template_directory') . '/images/home-icon-trans.png';?>')">
				<?php _e('Home',TDOMAIN);?>	
			</a>
		</li>
		<?php 
			$frontpage_id = get_option('page_on_front');
			$forum_exclude = '';
			wp_list_pages('exclude='.$frontpage_id.$forum_exclude.'&depth=3&title_li=')
		;?>
	</ul>
</div><!-- /nav -->
