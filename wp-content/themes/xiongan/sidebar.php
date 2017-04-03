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
			<h3>段子手</h3>
			<ul>
				<?php
				$newsCategory = get_category_by_slug( 'jokes' );
				$args = array(
					'posts_per_page'   => 3,
					'offset'           => 0,
					'category'         => $newsCategory->cat_ID
				);
				$newsArray = get_posts( $args );
				foreach ($newsArray as $_post) {
					?>
					<li class="cat-item cat-item-2">
						<?php echo $_post->post_content; ?>
					</li>
					<?php
				}

				?>
			</ul>
		</aside>
	</div>
</div>