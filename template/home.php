<?php
/*Template Name: Home*/
get_header();
?>
<main>
  <section class="banner-box common-padding">
    <div class="container">
      <div class="div">
        <h1 class="main-heading"><?php the_field('banner_heading'); ?></h1>
        <span class="small-heading"><?php the_field('banner_sub_heading'); ?></span>
        <h2 class="sub-heading"><?php the_field('banner_title'); ?></h2>
        <div class="hero-center-img">
          <img src="<?php the_field('banner_image');?>" class="hero-men" alt="">
        </div>
      </div>
    </div>

    </div>
  </section>
  <section class="mrq-sec-rotate">
    <div class="moveing-text">
      <div class="marquee-container item-marquee-left">
        <?php the_field('left_side_text'); ?>
      </div>
    </div>
    <div class="moveing-text-two">
      <div class="marquee-container item-marquee-right">
        <?php the_field('right_side_text'); ?>
        <!-- <p> Pay per click <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> <b>SEO</b> <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> Site Design and Development <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> <b>Pay per click</b> <span><img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/star.png" alt=""></span> SEO</p></div> -->
      </div>
  </section>
  <!-- Start Banner Section -->
  <!-- Start Service Section -->
  <section class="image-text">
    <div class="container">
      <?php the_field('service_content'); ?>
    </div>
  </section>
  <!-- service -->
  <section class="service">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="service-text">
            <?php the_field('service_heading'); ?>
            <div class="content">
              <p><?php the_field('service_description'); ?></p>
              <div class="button-box">
                <?php
                $started_button = get_field('started_button'); ?>
                <a href="<?php echo $started_button['url']; ?>" class="main-button"><?php echo $started_button['title']; ?><i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="service-img">
            <img src="<?php the_field('images_one'); ?>" alt="">
            <!-- <img class="service-img-top" src="<?php the_field('images_two'); ?>" alt=""> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- help-you -->
  <section class="help-you">
    <div class="container">
      <!-- <h2>What can we <span>help you</span> with</h2> -->
      <?php the_field('help_heading'); ?>
      <div class="row">
        <?php
        $help_services = get_field('help_services', $post_object->ID);
        if ($help_services) {
          foreach ($help_services as $post_object) {
            setup_postdata($post_object);
        ?>
            <div class="col-lg-4 col-sm-6 mb-4">
              <a href="<?php echo get_the_permalink($post_object->ID); ?>">
                <div class="help-you-item">
                  <?php
                  // Check if custom_icon field exists and then display it
                  $custom_icon = get_field('custom_icon', $post_object->ID);
                  if ($custom_icon) {
                  ?>
                    <img src="<?php echo ($custom_icon['url']); ?>" alt="<?php echo esc_attr($custom_icon['alt']); ?>">
                  <?php } ?>
                  <?php $custom_heading = get_field('custom_heading', $post_object->ID); ?>
                  <?php echo $custom_heading; ?>
                  <?php the_content() ?>
                </div>
              </a>
            </div>
        <?php
          } // end foreach
          wp_reset_postdata(); // Reset post data to the original post in the main query
        } // end if
        ?>
      </div>
    </div>
    </div>
  </section>
  <!-- Client -->
  <section class="client" style="background-color:#C63028;">
    <div class="container">
      <?php the_field('client_heading'); ?>
      <p class="line-after"><?php the_field('client_description'); ?> </p>
      <div class="owl-carousel client-slider">

        <?php
        $user_reviews = get_field('user_reviews');
        if ($user_reviews) {
          foreach ($user_reviews as $user) {
        ?>
            <div class="client-item">
              <span><i class="fa-solid fa-quote-left"></i></span>
              <p><?php echo $user['client_review']; ?></p>
              <div class="client-dtl">
                <div class="client-img">
                  <img src="<?php echo $user['profile_image']; ?>" alt="">
                </div>
                <div class="client-txt">
                  <h6><?php echo $user['user_name']; ?></h6>
                  <p><?php echo $user['user_designation']; ?></p>
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
  <div class="moveing-text marq-section">
    <div class="marquee-container item-marquee-left2">
      <?php the_field('client_moving_text'); ?>
    </div>
  </div>
  <!-- Portfolio -->
  <section class="portfolio" id="xportfolio">
    <div class="container">
      <?php the_field('portfolio_heading'); ?>
      <!-- <h2>Our <span>Portfolio</span></h2> -->
      <?php if (have_rows('portfolio_cards')) : ?>
        <ul class="portfolio-box">
          <?php $item_count = 0; ?>
          <?php while (have_rows('portfolio_cards')) : the_row();
            $background_image = get_sub_field('portfolio_background_image');
            $text = get_sub_field('portfolio_title');
            $link = get_sub_field('redirect_link');
            $item_count++;

            // Determine class based on $item_count
            if ($item_count == 1 || $item_count == 4) {
              $class = 'protfolio-odd'; // 1st and 4th items are odd
            } else {
              $class = 'protfolio-even'; // 2nd and 3rd items are even
            }
          ?>
            <?php if ($item_count % 2 != 0) : ?>
              <li>
              <?php endif; ?>
              <div class="portfolio-box-card <?php echo $class; ?>" style="background-image:url('<?php echo esc_url($background_image); ?>');">
                <article class="portfolio-text">
                  <p><?php echo esc_html($text); ?></p>
                  <a href="<?php echo esc_url($link['url']); ?>" class="main-button"><i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
                </article>
              </div>
              <?php if ($item_count % 2 == 0 || $item_count == count(get_field('portfolio_cards'))) : ?>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </ul>
      <div class="button-box text-center">
        <?php
        $view_button = get_field('view_button');
        ?>
        <a href="<?php echo $view_button['url']; ?>" class="main-button mt-5"><?php echo $view_button['title']; ?><i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>