<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Justin-Deftsoft
 */

get_header();
?>

	<main id="primary" class="site-main">
	<main class="service-detail-page">
    <!-- Hero -->
    <section class="inner-hero" style="background-color: #C63028;">
        <div class="container">
            <h2>	<?php the_title(); ?></h2> 
        </div>
    </section>
    <!-- -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-service-text">
                        <h2>Know More About
							<span><?php the_title();?></span></h2>
							<?php the_content();?>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                        <div class="button-box">

                     <?php 
					 $button_quote = get_field('button_quote', $post_object->ID);
					 ?>       
					 <a href="<?php echo $button_quote['url'];?>" class="main-button"><?php echo $button_quote['title'];?><i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
				<div class="about-service-img">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    <?php
    // Assuming $post_object is defined and contains the post object
    $custom_icon = get_field('custom_icon', $post_object->ID);
    if ($custom_icon) :
    ?>
        <img src="<?php echo esc_url($custom_icon['url']); ?>" class="service-sheild" alt="<?php echo esc_attr(get_the_title($post_object->ID)); ?>">
    <?php endif; ?>
</div>

                </div>
            </div>
        </div>
    </section>

		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'justin-deftsoft' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'justin-deftsoft' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
