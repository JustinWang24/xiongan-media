<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="sections_group">
	<div class="extra_content">

	</div>
	<div class="section">
		<div class="section_wrapper clearfix">
			<!--  Filter Area -->
			<!-- One full width row-->
			<div class="column one column_blog">
				<div class="blog_wrapper isotope_wrapper">
					<div class="posts_group lm_wrapper classic">
						<?php if ( have_posts() ) : ?>

							<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								?>
								<div class="post  format-standard has-post-thumbnail post-item isotope-item clearfix">
									<div class="image_frame post-photo-wrapper scale-with-grid">
										<div class="image_wrapper">
											<a href="<?php the_permalink(); ?>">
												<div class="mask"></div><img width="576" height="450" src="<?php the_post_thumbnail_url( add_image_size( 'custom-size', 576, 450 ) ); ?>" class="scale-with-grid wp-post-image" alt="<?php the_title(); ?>" />
											</a>
										</div>
									</div>
									<div class="post-desc-wrapper">
										<div class="post-desc">
											<div class="post-meta clearfix">
												<div class="author-date">
													</span><span class="date"><span> 发布 </span><i class="icon-clock"></i><?php the_date('Y-m-d'); ?></span>
												</div>
											</div>
											<div class="post-title">
												<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											</div>
											<div class="post-excerpt">
												<?php the_excerpt(); ?>
											</div>
											<div class="post-footer">
												<div class="button-love">
													<span class="love-text">赞成?</span><a href="#" class="mfn-love " data-id="2269"><span class="icons-wrapper"><i class="icon-heart-empty-fa"></i><i class="icon-heart-fa"></i></span><span class="label"><?php echo random_int(120, 2999)?></span></a>
												</div>
												<div class="post-links">
													<i class="icon-doc-text"></i><a href="<?php the_permalink(); ?>" class="post-more">阅读详情</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							endwhile;

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'twentysixteen' ),
								'next_text'          => __( 'Next page', 'twentysixteen' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
							) );

						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
