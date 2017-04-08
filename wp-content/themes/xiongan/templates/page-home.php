<?php
/*
Template Name: Home Page
*/
get_header();

$mobileDetector = get_mobile_detector();

the_post();
$data = get_fields();
?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <?php
            $items = new WP_Query([
                'post_type' => 'projects_in_chinese',
                'nopaging' => true
            ]);
            if(count($items->posts)>0){
                ?>
                <div class="fotorama" data-autoplay="true"
                     data-arrows="true" data-loop="true" data-click="true"
                     data-swipe="<?php echo $mobileDetector->isMobile()?'true':'false'; ?>"
                    >
                    <?php
                    foreach ($items->posts as $thePost) {
//                                            var_dump(get_field('is_in_home_page',$thePost->ID));
//                                            var_dump(get_field('hd_image',$thePost->ID));
//                                            var_dump($thePost);
                        $sliderFile = get_field('hd_image',$thePost->ID);
                        if(get_field('is_in_home_page',$thePost->ID)){
                            ?>
                            <div data-img="<?php echo $sliderFile['url']; ?>"  data-caption="<?php echo $thePost->post_title ?>">
                                <a href="<?php echo get_permalink($thePost) ?>"></a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <br>
                <?php
            }

            ?>
            <div class="entry-content">
                <div class="section sections_style_4" style="margin-top: -40px;">
                    <div class="section_wrapper clearfix" <?php echo $mobileDetector->isMobile() ? 'style="width: 75% !important;"':null; ?>>
                        <div class="items_group clearfix">
                            <?php
                                $jokesCategory = get_category_by_slug( 'jokes' );
                            ?>
                            <div class="column one column_blog">
                                <div class="blog_wrapper isotope_wrapper clearfix">
                                    <div class="posts_group lm_wrapper classic">
                                        <?php
                                        $args = array(
                                            'posts_per_page'   => 20,
                                            'offset'           => 0,
                                            'category__not_in' => [$jokesCategory->cat_ID]
                                        );
                                        $newsArray = get_posts( $args );
                                        foreach ($newsArray as $newsPost) {
//                                            $img_id = get_post_thumbnail_id( $newsPost->ID );
//                                            $image  = wp_get_attachment_image_src( $img_id, 'single-post-thumbnail' )[0];
                                            $image = get_the_post_thumbnail_url($newsPost,add_image_size( 'custom-size', 303, 221 ));
                                        ?>
                                            <div class="post  format-standard has-post-thumbnail  post-item isotope-item clearfix"  itemscope itemtype="http://schema.org.cn/NewsArticle" >
                                                <div class="date_label">
                                                    <?php echo substr($newsPost->post_date,0,11); ?>
                                                </div>
                                                <div class="image_frame post-photo-wrapper scale-with-grid">
                                                    <div class="image_wrapper" itemprop="image">
                                                        <a href="<?php echo get_permalink($newsPost) ?>" <?php echo $mobileDetector->isMobile()?'style="text-align:center;"':null; ?>>
                                                            <div class="mask"></div>
                                                            <img  itemprop="image" src="<?php echo $image; ?>" class="scale-with-grid wp-post-image" alt="home_press_blog_4" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-desc-wrapper">
                                                    <div class="post-desc">
                                                        <div class="post-title">
                                                            <h2 class="entry-title" itemprop="headline">
                                                                <a href="<?php echo get_permalink($newsPost) ?>">
                                                                    <?php echo get_the_title($newsPost); ?>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div class="post-excerpt" style="height: 50px; overflow: hidden;">
                                                            <p class="big" itemprop="description">
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

            </div>
        </div>
        <!-- Sidebar area-->
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
