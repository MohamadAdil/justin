<?php
/*Template Name: Portfolio*/
get_header();
?>
<main class="service-page">
    <!-- Hero -->
    <section class="inner-hero" style="background-color: #C63028;">
        <div class="container">
            <h2><?php the_field('banner_heading'); ?></h2>
        </div>
    </section>
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