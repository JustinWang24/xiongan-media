<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta name="360-site-verification" content="97784d8bac54d62578afb21936f1739f" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico">
	<!-- FONTS -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400,400italic,700'>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

	<?php wp_head(); ?>
</head>

<?php
	$bodyClass = 'with_aside aside_right layout-full-width header-stack header-magazine minimalist-header sticky-header sticky-white hide-title-area no-content-padding';
	if(is_category()){
		$bodyClass = 'archive category with_aside aside_right layout-full-width header-stack header-magazine minimalist-header sticky-header sticky-white';
	}
?>

<body class="<?php echo $bodyClass; ?>">
<div id="Wrapper" class="site">
	<!-- Header Wrapper -->
	<div id="Header_wrapper">
		<!-- Header -->
		<header id="Header">
			<!-- Header Top -  Info Area -->CfHhQpS7 WebMelbourne307
			<div id="Action_bar">
				<div class="container">
					<div class="column one">
						<!-- Header - contact info area-->
						<ul class="contact_details">
							<li class="slogan">
								如果您有合作与推广需求?
							</li>
							<li class="phone">
								<i class="icon-phone"></i><a href="tel:+61413012206">海外 +61 413 012 206</a>&nbsp;<a href="tel:13810680828">中国大陆 +86 13810680828</a>
							</li>
							<li class="mail">
								<i class="icon-mail-line"></i><a href="mailto:info@xiongan.media">邮件 info@xiongan.media</a>
							</li>
						</ul>
						<!--Social info area-->
						<ul class="social">
							<li class="facebook">
								<a href="https://www.facebook.com/%E9%9B%84%E5%AE%89%E6%96%B0%E9%97%BB-199747600515288/" title="Facebook"><i class="icon-facebook"></i></a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/XionganNews" title="Twitter"><i class="icon-twitter"></i></a>
							</li>
							<li class="twitter">
								<a href="<?php echo get_template_directory_uri() ?>/images/qrcode_xiongan.jpg" title="关注微信: 附都雄安  关注有关雄安的最新资讯" style="color: #ff0000;" class="zoom" rel="prettyphoto">关注微信: 附都雄安</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Header -  Logo and Menu area -->
			<div id="Top_bar">
				<div class="container">
					<div class="column one">
						<div class="top_bar_left clearfix">
							<!-- Logo-->
							<div class="logo">
								<h1>
									<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
										<img class="scale-with-grid" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
									</a>
								</h1>
							</div>
							<!-- Main menu-->
							<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
								<div class="menu_wrapper">
									<?php if ( has_nav_menu( 'primary' ) ) : ?>
										<nav id="menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
											<?php
											wp_nav_menu( array(
												'theme_location' => 'primary',
												'menu_class'     => 'menu',
												'container'		=>'ul',
												'container_id'	=>'menu-main-menu',
												'link_before'=> '<span>',
												'link_after'=> '</span>',
											) );
											?>
										</nav><!-- .main-navigation -->
									<?php endif; ?>

									<?php if ( has_nav_menu( 'social' ) ) : ?>
										<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
											<?php
											wp_nav_menu( array(
												'theme_location' => 'social',
												'menu_class'     => 'social-links-menu',
												'depth'          => 1,
												'link_before'    => '<span class="screen-reader-text">',
												'link_after'     => '</span>',
											) );
											?>
										</nav><!-- .social-navigation -->
									<?php endif; ?>
									<a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
								</div><!-- .site-header-menu -->
								<!-- Secondary menu area - only for certain pages -->
								<div class="secondary_menu_wrapper"></div>
							<?php endif; ?>

							<!-- Banner area - only for certain pages-->
							<div class="banner_wrapper">
								<h3 class="site-subtitle" style="line-height: 60px; ">
									<?php
									$description = get_bloginfo( 'description', 'display' );
									echo $description;
									?>
								</h3>
							</div>
							<!-- Header Searchform area-->
							<div class="search_wrapper">
								<form method="get" action="#">
									<i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
									<input type="text" class="field" name="s" placeholder="Enter your search" />
									<input type="submit" class="submit flv_disp_none" value="" />
								</form>
							</div>
						</div>
						<div class="top_bar_right">
							<div class="top_bar_right_wrapper">
								<a id="search_button" href="#"><i class="icon-search"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php
			if(is_category()){
				$currentCategory = get_queried_object();
				?>
				<div id="Subheader">
					<div class="container">
						<div class="column one">
							<h1 class="title"><?php echo $currentCategory->name; ?></h1>
							<!--BreadCrumbs area-->
							<ul class="breadcrumbs">
								<li>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">首页</a><span><i class="icon-right-open"></i></span>
								</li>
								<li>
									<a href="#"><?php echo $currentCategory->name; ?></a><span><i class="icon-right-open"></i></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php
			}
		?>
	</div>

	<div id="content" itemscope itemtype="http://schema.org/NewsArticle">
		<div class="content_wrapper clearfix">
