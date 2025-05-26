<?php
/*Template Name: Service-page*/
get_header();
?>
<main class="service-page">
    <!-- Hero -->
    <section class="inner-hero" style="background-color: #C63028;">
        <div class="container">
            <h2><?php the_field('banner_heading'); ?></h2>
        </div>
    </section>
    <!-- help-you -->
    <section class="help-you">
        <div class="container">
            <!-- <h2>What can we <span>help you</span> with</h2> -->
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
            <!-- 
                <div class="col-lg-4 mb-4">
                    <a href="#">
                        <div class="help-you-item">
                            <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/help-img-1.png" alt="">
                            <br>
                            <h3>Marketing <span>Strategy</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="#">
                        <div class="help-you-item">
                            <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/help-img-2.png" alt="">
                            <h3>Social<br><span>Media</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="#">
                        <div class="help-you-item">
                            <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/help-img-3.png" alt="">
                            <h3>Digital<br><span>Marketing</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="#">
                        <div class="help-you-item">
                            <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/help-img-4.png" alt="">
                            <h3>Marketing<br><span>campaigns</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="#">
                        <div class="help-you-item">
                            <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/help-img-5.png" alt="">
                            <h3>Pay Per Click<br><span>advertising</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="#">
                        <div class="help-you-item">
                            <img src="http://49.249.236.30/justin/wp-content/uploads/2024/06/help-img-6.png" alt="">
                            <h3>Search Engine<br><span>Optimisation</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </a>
                </div> -->
        </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>