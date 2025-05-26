<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Justin-Deftsoft
 */

?>
<!-- lets-talk -->
<section class="lets-talk" style="background-color:#C63028;">
  <div class="container">
    <div class="row lets-talk-wrap">
      <div class="col-lg-7">
        <h2><?php the_field('talk_heading', 'option'); ?></h2>
        <?php the_field('talk_sub_heading', 'option'); ?>
        <!-- <h3>Ready TO <span>Start a Project</span></h3> -->
        <p><?php the_field('talk_content', 'option'); ?></p>
        <div class="button-box">
          <?php
          $talk_button = get_field('talk_button', 'option');
          ?>
          <a href="<?php echo $talk_button['url']; ?>" class="main-button"><?php echo $talk_button['title']; ?><i
              class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
        </div>
      </div>
      <div class="lets-talk-img col-lg-5">
        <img src="<?php the_field('talk_image', 'option'); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<section class="mrq-sec-rotate">
  <div class="moveing-text">
    <div class="marquee-container item-marquee-left3">
      <?php the_field('moving_text_one', 'option'); ?>
    </div>
</div>
  
    <div class="moveing-text-two">
      <div class="marquee-container item-marquee-right3">
        <?php the_field('moving_text_two', 'option'); ?>
      </div>
    </div>
  
</section>

<!-- <div class="mrq-sec-rotate footer-marque">
  <div class="moveing-text">
    <div class="marquee-container item-marquee-left3">
      <?//php the_field('moving_text_one', 'option'); ?>
    </div>
    <div class="moveing-text-two">
      <div class="marquee-container item-marquee-right3">
        <?//php the_field('moving_text_two', 'option'); ?>
      </div>
    </div>
  </div>
</div> -->
<footer>
  <div class="container">
    <?php
    if (function_exists('the_custom_logo')) {
      the_custom_logo();
    }
    ?>
    <div class="footer-bottom">
      <ul class="social-link">
        <?php
        $social_media_links = get_field('social_media_links', 'option');
        if ($social_media_links) {
          foreach ($social_media_links as $media) {
            ?>
            <li>
              <a href="<?php echo $media['media_link']; ?>">
                <i class="<?php echo $media['icon_class']; ?>"></i>
              </a>
            </li>
            <?php
          }
        }
        ?>
      </ul>
      <?php
      $copyright_link = get_field('copyright_link', 'option');
      ?>
      <a href="<?php echo $copyright_link['url']; ?>" class="copyright"><?php echo $copyright_link['title']; ?></a>
      <ul class="policy">

        <li>
          <?php
          $privacy_page = get_field('privacy_page', 'option');
          ?>
          <a href="<?php echo $privacy_page['url']; ?>"><?php echo $privacy_page['title']; ?></a>
        </li>
        <li>
          <?php
          $terms_page = get_field('terms_page', 'option');
          ?>
          <a href="<?php echo $terms_page['url']; ?>"><?php echo $terms_page['title']; ?></a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>