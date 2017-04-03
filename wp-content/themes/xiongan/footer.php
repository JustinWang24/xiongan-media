<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

<!-- Footer-->
<footer id="Footer" class="clearfix">
	<!-- Footer - First area -->
	<div class="footer_action">
		<div class="container">
			<!-- One full width row-->
			<div class="column one column_column">
				<span>Vestibulum commodo <span class="themecolor">volutpat</span> convallis ac laoreet turpis faucibus</span>
			</div>
		</div>
	</div>
	<div class="widgets_wrapper">
		<div class="container">
			<div class="one-fourth column">
				<!-- Text Area -->
				<aside id="text-7" class="widget widget_text">
					<div class="textwidget"><img src="<?php echo get_template_directory_uri() ?>/images/logo-reverse.png" alt="">
						<p>
							<span class="big">雄安新区, 千年基业. 雄安信息网致力于为您提供全面的雄安新区咨询, 祝您雄霸天下, 安居乐业</span>
						</p>
						<p>
							关注雄安集团的下列社交媒体, 掌握雄安新区第一手资讯
						</p>
						<a href="https://www.facebook.com/%E9%9B%84%E5%AE%89%E6%96%B0%E9%97%BB-199747600515288/" class="icon_bar icon_bar_facebook icon_bar_small">
							<span class="t">
								<i class="icon-facebook">
								</i>
							</span>
							<span class="b">
								<i class="icon-facebook"></i>
							</span>
						</a>
						<a href="https://twitter.com/XionganNews" class="icon_bar icon_bar_twitter icon_bar_small">
							<span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span>
						</a>
					</div>
				</aside>
			</div>
			<div class="one-fourth column">
				<!-- Recent Comments Area -->
				<aside class="widget widget_mfn_recent_comments">
					<h4>最热评论</h4>
					<div class="Recent_comments">
						<ul>
							<li>
								<span class="date_label"></span>
								<p>
									<i class="icon-user"></i><strong>admin</strong> commented on <a href="content/press/item-1.html#comment-6" title="admin | Aenean ligula mol stie viverra">Aenean ligula mol stie viverra</a>
								</p>
							</li>
							<li>
								<span class="date_label">November 17, 2015</span>
								<p>
									<i class="icon-user"></i><strong>admin</strong> commented on <a href="content/press/item-1.html#comment-5" title="admin | Aenean ligula mol stie viverra">Aenean ligula mol stie viverra</a>
								</p>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="one-fourth column">
				<!-- Recent posts -->
				<aside class="widget widget_mfn_recent_posts">
					<h4>最新热点</h4>
					<div class="Recent_posts">
						<ul>
							<li class="post  format-standard has-post-thumbnail ">
								<a href="content/press/item-1.html">
									<div class="photo"><img width="80" height="80" src="content/press/images/home_press_blog_1-80x80.jpg" class="scale-with-grid wp-post-image" alt="home_press_blog_1" />
									</div>
									<div class="desc">
										<h6>Aenean ligula mol stie viverra</h6><span class="date"><i class="icon-clock"></i>May 12, 2015</span>
									</div>
								</a>
							</li>
							<li class="post  format-standard has-post-thumbnail ">
								<a href="content/press/item-2.html">
									<div class="photo"><img width="80" height="80" src="content/press/images/home_press_blog_2-80x80.jpg" class="scale-with-grid wp-post-image" alt="home_press_blog_2" />
									</div>
									<div class="desc">
										<h6>Vitae adipiscing turpis aenean</h6><span class="date"><i class="icon-clock"></i>May 11, 2015</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="one-fourth column">
				<!-- Meta Links Area -->
				<aside id="meta-2" class="widget widget_meta">
					<h4>快速通道</h4>
					<ul>
						<li>
							<a href="#">Log in</a>
						</li>
						<li>
							<a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
						</li>
						<li>
							<a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
						</li>
					</ul>
				</aside>
			</div>
		</div>
	</div>
	<!-- Footer copyright-->
	<div class="footer_copy">
		<div class="container">
			<div class="column one">
				<a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
				<div class="copyright">
					&copy; <?php echo date('Y') ?> 雄安新闻网 - Power by <a target="_blank" rel="nofollow" href="http://www.webmelbourne.com">维墨科技</a>
				</div>
				<!--Social info area-->
				<ul class="social">
					<li class="facebook">
						<a href="https://www.facebook.com/%E9%9B%84%E5%AE%89%E6%96%B0%E9%97%BB-199747600515288/" title="Facebook"><i class="icon-facebook"></i></a>
					</li>
					<li class="twitter">
						<a href="https://twitter.com/XionganNews" title="Twitter"><i class="icon-twitter"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
