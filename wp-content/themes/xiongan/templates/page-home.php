<?php
/*
Template Name: Home Page
*/

get_header();

the_post();
$data = get_fields();
?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section sections_style_4">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Page Title-->
                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <h2 class="title">新闻导读</h2>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_blog">
                                <div class="blog_wrapper isotope_wrapper clearfix">
                                    <div class="posts_group lm_wrapper classic">
                                        <?php
                                        $newsCategory = get_category_by_slug( 'news' );
                                        $args = array(
                                            'posts_per_page'   => 4,
                                            'offset'           => 0,
                                            'category'         => $newsCategory->cat_ID
                                        );
                                        $newsArray = get_posts( $args );
                                        foreach ($newsArray as $newsPost) {
                                            $img_id = get_post_thumbnail_id( $newsPost->ID );
                                            $image  = wp_get_attachment_image_src( $img_id, 'single-post-thumbnail' )[0];
                                        ?>
                                            <div class="post  format-standard has-post-thumbnail  post-item isotope-item clearfix">
                                                <div class="date_label">
                                                    <?php echo substr($newsPost->post_date,0,11); ?>
                                                </div>
                                                <div class="image_frame post-photo-wrapper scale-with-grid">
                                                    <div class="image_wrapper">
                                                        <a href="<?php echo get_permalink($newsPost) ?>">
                                                            <div class="mask"></div><img width="576" height="450" src="<?php echo $image; ?>" class="scale-with-grid wp-post-image" alt="home_press_blog_4" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a href="<?php echo $image; ?>" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="<?php echo get_permalink($newsPost) ?>" class="link"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-desc-wrapper">
                                                    <div class="post-desc">
                                                        <div class="post-meta clearfix">
                                                            <div class="author-date">
                                                                    </span><span class="date"><span> 发表 </span><i class="icon-clock"></i> <?php echo substr($newsPost->post_date,0,11); ?></span>
                                                            </div>
                                                            <div class="category">
                                                                <span class="cat-btn">目录标签 <i class="icon-down-dir"></i></span>
                                                                <div class="cat-wrapper">
                                                                    <ul class="post-categories">
                                                                        <li>
                                                                            <a href="#" rel="category tag">新闻</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="post-title">
                                                            <h2 class="entry-title">
                                                                <a href="<?php echo get_permalink($newsPost) ?>">
                                                                    <?php echo get_the_title($newsPost); ?>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div class="post-excerpt">
                                                            <p class="big">
                                                                <?php echo $newsPost->post_excerpt; ?>
                                                            </p>
                                                        </div>
                                                        <div class="post-footer">
                                                            <div class="button-love">
                                                                <span class="love-text">赞同吗?</span><a href="#" class="mfn-love " data-id="2275"><span class="icons-wrapper"><i class="icon-heart-empty-fa"></i><i class="icon-heart-fa"></i></span><span class="label"><?php echo random_int(800,2999) ?></span></a>
                                                            </div>
                                                            <div class="post-links">
                                                                <i class="icon-doc-text"></i><a href="<?php echo get_permalink($newsPost) ?>" class="post-more">阅读详情</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Page devider -->
                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <div class="hr_wide ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section sections_style_4">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_blog_slider">
                                <div class="blog_slider clearfix ">
                                    <div class="blog_slider_header">
                                        <h4 class="title">政策导向</h4>
                                        <a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a>
                                    </div>
                                    <ul class="blog_slider_ul">
                                        <?php
                                        $policyCategory = get_category_by_slug( 'policy' );
                                        $args = array(
                                            'posts_per_page'   => 3,
                                            'offset'           => 0,
                                            'category'         => $policyCategory->cat_ID
                                        );
                                        $policyArray = get_posts( $args );
                                        foreach ($policyArray as $_post) {
                                            $img_id = get_post_thumbnail_id( $_post->ID );
                                            $image  = wp_get_attachment_image_src( $img_id, 'single-post-thumbnail' )[0];
                                        ?>
                                            <li class="post  format-standard has-post-thumbnail ">
                                                <div class="item_wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper"><img width="576" height="450" src="<?php echo $image; ?>" class="scale-with-grid wp-post-image" alt="<?php echo get_the_title($_post); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="date_label">
                                                        <?php echo substr($_post->post_date,0,11); ?>
                                                    </div>
                                                    <div class="desc">
                                                        <h4><a href="<?php echo get_permalink($_post) ?>"><?php echo get_the_title($_post); ?></a></h4>
                                                        <hr class="hr_color" />
                                                        <a href="<?php echo get_permalink($_post) ?>" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">阅读详情</span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    <div class="slider_pagination"></div>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <div class="hr_wide ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section sections_style_4">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_blog_slider">
                                <div class="blog_slider clearfix ">
                                    <div class="blog_slider_header">
                                        <h4 class="title">投资与房地产</h4><a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a>
                                    </div>
                                    <ul class="blog_slider_ul">
                                        <?php
                                        $realEstate = get_category_by_slug( 'real-estate' );
                                        $investment = get_category_by_slug( 'investment' );
                                        $args = array(
                                            'posts_per_page'   => 6,
                                            'offset'           => 0,
                                            'category'         => $realEstate->cat_ID.','.$investment->cat_ID
                                        );
                                        $policyArray = get_posts( $args );
                                        foreach ($policyArray as $_post) {
                                            $img_id = get_post_thumbnail_id( $_post->ID );
                                            $image  = wp_get_attachment_image_src( $img_id, 'single-post-thumbnail' )[0];
                                            ?>
                                            <li class="post  format-standard has-post-thumbnail ">
                                                <div class="item_wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper"><img width="576" height="450" src="<?php echo $image; ?>" class="scale-with-grid wp-post-image" alt="<?php echo get_the_title($_post); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="date_label">
                                                        <?php echo substr($_post->post_date,0,11); ?>
                                                    </div>
                                                    <div class="desc">
                                                        <h4><a href="<?php echo get_permalink($_post) ?>"><?php echo get_the_title($_post); ?></a></h4>
                                                        <hr class="hr_color" />
                                                        <a href="<?php echo get_permalink($_post) ?>" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">阅读详情</span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <div class="slider_pagination"></div>
                                </div>
                            </div>
                            <!-- Page devider -->
                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <div class="hr_wide ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section sections_style_4">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h2>观点与评论</h2>
                                </div>
                            </div>
                            <?php
                            $comments = get_category_by_slug( 'comments' );
                            $args = array(
                                'posts_per_page'   => 6,
                                'offset'           => 0,
                                'category'         => $comments->cat_ID
                            );
                            $commentsArray = get_posts( $args );
                            foreach ($commentsArray as $_post) {
                                $img_id = get_post_thumbnail_id( $_post->ID );
                                $image  = wp_get_attachment_image_src( $img_id, 'single-post-thumbnail' )[0]
                                ?>
                                <!-- One Third (1/3) Column -->
                                <div class="column one-third column_photo_box">
                                    <div class="photo_box ">
                                        <h4><?php echo get_the_title($_post) ?></h4>
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <div class="mask"></div><img class="scale-with-grid" src="<?php echo $image ?>" alt="<?php echo get_the_title($_post) ?>" />
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>
                                                <?php echo $_post->post_excerpt; ?>
                                            </p>
                                            <a href="<?php echo get_permalink($_post) ?>">阅读详情</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar area-->
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
