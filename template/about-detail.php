<?php
/*Template Name:About-detail*/
get_header(); ?>
<section class="inner-hero" style="background-color: #C63028;">
    <div class="container">
        <h2><?php the_field('top_heading');?></h2>
    </div>
</section>
<!-- -->
<section class="meet-justin">
    <div class="container">
    <?php the_field('meet_heading');?>
        <!-- <h2>Meet <span>Justin</span></h2> -->
        <div class="mage">
            <img src="<?php the_field('meet_image');?>" alt="">
        </div>
        <?php the_field('meet_details');?>
        <!-- <h4>Omar Saris</h4>
        <h6>Company CEO</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p> -->
    </div>
</section>
</section>
<!-- -->
<section class="meet-justin-video">
    <div class="container">
    <?php the_field('new_heading');?>
        <!-- <h2>Justin <span>Story</span></h2> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="video-column">
                    <div class="video-wrapper">
                        <!-- <video class="video-player" poster="<?php //the_field('poster_image');?>">
                            <source src="<?php// the_field('video_upload');?>" type="video/mp4">
                        </video> -->

                        <video loop muted playsinline class="video-player" poster="<?php the_field('poster_image');?>" src="<?php the_field('video_upload');?>">
                                     </video>
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- lets-talk -->
<!-- <section class="lets-talk" style="background-color:#C63028;">
    <div class="container">
        <div class="row lets-talk-wrap">
            <div class="col-lg-7">
                <h2>LET's TALK</h2>
                <h3>Ready TO <span>Start a Project</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="button-box">
                    <a href="#" class="main-button">Lets Talk<i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
                </div>
            </div>
            <div class="lets-talk-img col-lg-5">
                <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/lets-talk-img.png" alt="">
            </div>
        </div>
    </div>
    <div class="marquee-container item-marquee-left">
        <p> Pay per click <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> <b>SEO</b> <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> Site Design and Development <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> <b>Pay per
                click</b> <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> SEO</p>
    </div>
    <div class="marquee-container item-marquee-right">
        <p> Pay per click <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> <b>SEO</b> <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> Site Design and Development <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> <b>Pay per
                click</b> <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> SEO</p>
    </div>
</section> -->
<?php get_footer(); ?>