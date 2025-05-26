<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Justin-Deftsoft
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'justin-deftsoft' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			// the_custom_logo();
			// if ( is_front_page() && is_home() ) :
			// 	?>
				<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			// else :
				?>
				<p class="site-title"><a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			// endif;
			// $justin_deftsoft_description = get_bloginfo( 'description', 'display' );
			// if ( $justin_deftsoft_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php// echo $justin_deftsoft_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php //endif; ?>
		</div>.site-branding -->

		<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
      <div class="container">
      <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
        <!-- <a class="navbar-brand" href="#">
          <img src="./img/logo.svg" alt="logo" class="logo img-fluid">
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa-solid fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php
                        wp_nav_menu([
                            'menu' => 'Menu 1',
                            'menu_class' => 'navbar-nav',
                            'container' => false,
                            'add_li_class' => 'nav-item',
                            'link_class'  => "nav-link",
                        ]);
                        ?>
          <!-- <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li> -->
            <div class="button-box">
              <?php 
              $link_button = get_field('link_button','option');
              ?>
              <a href="<?php echo $link_button['url'];?>" class="main-button"><?php echo $link_button['title'];?><i class="fa-solid fa-arrow-right-long right-btn-arrow"></i></a>
            </div>
          </ul>
        </div>
      </div>
    </nav>

	</header><!-- #masthead -->
