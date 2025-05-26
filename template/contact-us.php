<?php
/*Template Name: Contact Us*/
get_header();
?>
<main>
     <!-- Hero -->
     <section class="inner-hero" style="background-color: #C63028;">
        <div class="container">
            <h2><?php the_field('top_heading');?></h2>
           
        </div>
    </section>
    
    <section class="contact-section">
        <div class="container">
            <!-- <h2>Have <span>Any Question?</span></h2> -->
            <?php the_field('form_heading');?>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="8529dad" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-information">
        <div class="container">
            <h2><?php the_field('detail_heading');?></h2>
            <div class="row justify-content-center">
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-text">
                        <?php the_field('address_details');?>
                            <!-- <p>Address</p>
                            <a href="">Street No 7, USA</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-text">
                        <?php the_field('call_us_details');?>
                            <!-- <p>Call Us</p>
                            <a href="">380-888-2008</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                        <?php the_field('email_details');?>
                            <!-- <p>Email Us</p>
                            <a href="">info@example.com</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="contact-text">
                        <?php the_field('timing_details');?>
                            <!-- <p>Office Hours</p>
                            <a href="">10:00AM to 5:00PM Mon-Fri</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>