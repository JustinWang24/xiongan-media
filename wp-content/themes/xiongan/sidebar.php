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
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" class="field" placeholder="搜索您感兴趣的话题" value="<?php echo get_search_query(); ?>" name="s" />
				<input type="submit" class="submit" value="搜索">
				</input>
			</form>
		</aside>
		<!-- Text Area -->
		<aside class="widget widget_text">
			<h3 style="color: #ff0000;">关注下列社交平台-内容更多</h3>
			<div class="textwidget">
				<a href="https://www.facebook.com/%E9%9B%84%E5%AE%89%E6%96%B0%E9%97%BB-199747600515288/" class="icon_bar icon_bar_facebook icon_bar_small">
					<span class="t"><i class="icon-facebook"></i></span>
					<span class="b"><i class="icon-facebook"></i></span>
				</a>
				<a href="https://twitter.com/XionganNews" class="icon_bar icon_bar_twitter icon_bar_small">
					<span class="t"><i class="icon-twitter"></i></span>
					<span class="b"><i class="icon-twitter"></i></span>
				</a>
				<a href="<?php echo get_template_directory_uri() ?>/images/qrcode_xiongan.jpg" class="icon_bar icon_bar_twitter icon_bar_small follow-wechat-btn zoom" title="关注微信: 附都雄安  关注有关雄安的最新资讯" rel="prettyphoto" style="width: 140px;">
							<span class="t" style="width: 140px;">
								关注微信: 附都雄安
							</span>
					</span>
							<span class="b" style="width: 140px;">
								关注微信: 附都雄安
							</span>

				</a>
			</div>
			<br>
			<h3>赞助商家</h3>
			<div class="widget widget_text">
				<a href="https://www.webmelbourne.com" title="企业网站快速搭建$660起">
					<img src="<?php echo get_template_directory_uri() ?>/images/web_melbourne.jpg" style="max-width: 320px;" alt="WebMelbourne 维墨科技">
				</a>
			</div>
		</aside>
		<!-- Categories Area -->
		<aside class="widget widget_categories">
			<h3>不可靠消息 :)</h3>

				<?php
				$newsCategory = get_category_by_slug( 'jokes' );
				$args = array(
					'posts_per_page'   => 6,
					'offset'           => 0,
					'category'         => $newsCategory->cat_ID
				);
				$newsArray = get_posts( $args );
				if($newsArray){

					foreach ($newsArray as $_post) {
						?>
			<ul class="has-shadow has-radius">
						<li class="cat-item cat-item-2">
							<?php echo $_post->post_content; ?>
						</li>
			</ul>
						<br>
						<?php
					}
				}
				?>

		</aside>
	</div>
</div>
