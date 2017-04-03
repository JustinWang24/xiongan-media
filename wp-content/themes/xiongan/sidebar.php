<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) && false ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

<div class="sidebar sidebar-1 four columns">
	<div class="widget-area clearfix ">
		<!-- Search form-->
		<aside class="widget widget_search">
			<form method="get" action="#">
				<input type="text" class="field" name="s" placeholder="Enter your search" />
				<input type="submit" class="submit" value="Search" />
			</form>
		</aside>
		<!-- Text Area -->
		<aside class="widget widget_text">
			<h3>关注我们</h3>
			<div class="textwidget">
				<a href="https://www.facebook.com/%E9%9B%84%E5%AE%89%E6%96%B0%E9%97%BB-199747600515288/" class="icon_bar icon_bar_facebook icon_bar_small">
					<span class="t"><i class="icon-facebook"></i></span>
					<span class="b"><i class="icon-facebook"></i></span>
				</a>
				<a href="https://twitter.com/XionganNews" class="icon_bar icon_bar_twitter icon_bar_small">
					<span class="t"><i class="icon-twitter"></i></span>
					<span class="b"><i class="icon-twitter"></i></span>
				</a>
			</div>
		</aside>
		<!-- Categories Area -->
		<aside class="widget widget_categories">
			<h3>往期热点文章</h3>
			<ul>
				<li class="cat-item cat-item-2">
					<a href="content/press/lifestyle.html">新闻</a>
				</li>
				<li class="cat-item cat-item-5">
					<a href="content/press/news.html">News</a>
				</li>
				<li class="cat-item cat-item-8">
					<a href="content/press/sport.html">Sport</a>
				</li>
				<li class="cat-item cat-item-9">
					<a href="content/press/technology.html">Technology</a>
				</li>
			</ul>
		</aside>
	</div>
</div>
