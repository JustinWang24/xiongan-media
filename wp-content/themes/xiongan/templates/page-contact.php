<?php
/*
Template Name: Contact Us Page
*/
get_header();

$mobileDetector = get_mobile_detector();

the_post();
$data = get_fields();
?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">

                <div class="section sections_style_4">
                    <div class="section_wrapper clearfix">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <div class="column one-third column_contact_box">
                                    <div class="opening_hours flv_style_15">
                                        <h4>联系我们</h4>
                                        <div class="opening_hours_wrapper">
                                            <ul>
                                                <li class="phone">
                                                    <a href="tel:+61413012206">海外 +61 413 012 206</a>
                                                </li>
                                                <li class="phone">
                                                    <a href="tel:13810680828">中国 +86 13810680828</a>
                                                </li>
                                                <li class="email">
                                                    <a href="mailto:info@xiongan.media">邮件 info@xiongan.media</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-third column_opening_hours">
                                    <div class="opening_hours flv_style_16">
                                        <h4>社交媒体</h4>
                                        <div class="opening_hours_wrapper">
                                            <ul>
                                                <li class="facebook">
                                                    <a href="https://www.facebook.com/%E9%9B%84%E5%AE%89%E6%96%B0%E9%97%BB-199747600515288/" title="Facebook">
                                                        <i class="icon-facebook"></i>雄安新闻@Facebook
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="https://twitter.com/XionganNews" title="Twitter"><i class="icon-twitter"></i>雄安新闻@Twitter</a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="<?php echo get_template_directory_uri() ?>/images/34.pic.jpg" title="关注微信: 雄安群众" style="color: #ff0000;" class="zoom" rel="prettyphoto">关注微信: 雄安群众</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-third column_info_box">
                                    <div class="opening_hours flv_style_17" style="padding-bottom: 14px;">
                                        <h4>欢迎投稿</h4>
                                        <div class="opening_hours_wrapper">
                                            <p>
                                                如果您有话不吐不快,那就赶紧<a href="mailto:info@xiongan.media">发邮件</a>给我们吧. 无论您是原创文章, 音频, 视频, 我们都照收不误, 并保证第一时间发表.
                                            </p>
                                            <p>
                                                广告合作, 同样欢迎! 立即联系我们吧.
                                            </p>
                                        </div>
                                    </div>
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
