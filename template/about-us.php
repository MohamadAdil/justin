<?php
/*Template Name: About-us*/
get_header();
?>
<main class="service-detail-page">
    <!-- Hero -->
    <section class="inner-hero" style="background-color: #C63028;">
        <div class="container">
            <h2><?php the_field('about_title'); ?></h2>

        </div>
    </section>
    <!-- -->
    <section class="service-vedio-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-service-text">
                        <!-- <h2>Know More About <span>LFGrow</span> marketing</h2> -->
                        <?php the_field('grow_heading'); ?>
                        <?php the_field('grow_content'); ?>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h5>mission and values</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                        <div class="button-box">
                            <?php
                            $service_button = get_field('service_button'); ?>
                            <a href="<?php echo $service_button['url']; ?>" class="main-button"><?php echo $service_button['title']; ?><i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-us-video">
                        <div class="video-column">
                            <div class="video-wrapper">
                                <!-- <video class="video-player" poster="<?php //the_field('video_poster_image');
                                                                            ?>">
                                    <source src="<? php // the_field('grow_video');
                                                    ?>" type="video/mp4">
                                </video> -->
                                <video loop muted playsinline class="video-player" poster="<?php the_field('video_poster_image'); ?>" src="<?php the_field('grow_video'); ?>">
                                </video>
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -->
    <section class="feature-about">
        <div class="container">
            <!-- <h2>Our <span>Process</span></h2> -->
            <?php the_field('feature_heading'); ?>
            <div class="row">
                <?php
                $feature_item = get_field('feature_item');
                if ($feature_item) {
                    foreach ($feature_item as $item) {
                ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-img">
                                    <img src="<?php echo $item['feature_icon']; ?>" alt="">
                                </div>
                                <div class="feature-item-text">
                                    <h4><?php echo $item['feature_heading']; ?></h4>
                                    <p><?php echo $item['feature_content']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>