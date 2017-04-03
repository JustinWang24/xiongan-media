<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="sections_group">
	<div id="post-<?php the_ID(); ?>" class="post format-standard has-post-thumbnail">
		<div class="section section-post-header">
			<div class="section_wrapper clearfix">
				<!-- One full width row-->
				<br>
				<div class="column one post-header">
					<div class="button-love">
						<a href="#" class="mfn-love " data-id="2271">
							<span class="icons-wrapper">
								<i class="icon-heart-empty-fa"></i>
								<i class="icon-heart-fa"></i></span><span class="label"><?php echo random_int(120, 2999); ?></span></a>
					</div>
					<div class="title_wrapper">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<div class="post-meta clearfix">
							<div class="author-date">

								<span class="date">发表 <i class="icon-clock"></i>
									<time class="entry-date" datetime="" >
										<?php echo get_the_date(); ?>
									</time>
								</span>
							</div>

							<div class="category mata-tags">
								<span class="cat-btn">文章标签 <i class="icon-down-dir"></i></span>
								<div class="cat-wrapper">
									<ul>
										<?php
											$tags = get_the_tags();
											foreach ($tags as $tag) {
												?>
													<li>
														<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
													</li>
												<?php
											}

										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Post Featured Element (image / video / gallery)-->
			</div>
		</div>
		<!-- Post Content-->
		<div class="post-wrapper-content">
			<div class="entry-content">
				<div class="section the_content">
					<div class="section_wrapper">
						<div class="the_content_wrapper">
							<div class="column one single-photo-wrapper">

								<div class="image_frame scale-with-grid" style="margin: 10px;">
									<div class="image_wrapper">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
							</div>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="section section-post-footer">
				<div class="section_wrapper clearfix">
					<!-- One full width row-->
					<div class="column one post-pager"></div>
				</div>
			</div>
		</div>
	</div>
</div>
