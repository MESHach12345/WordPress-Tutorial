<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-8 col-xl-7">
				<div class="skip-bin-info-holder">
					<div class="overlay-image-arrow">
						<img src="<?php echo get_template_directory_uri() ?>/image/home-hero-arrow-up.svg" alt="Up Arrow">
					</div>
					<div class="title">
						<i class="fa fa-arrow-circle-up"></i> Skip Bin Instant Quote
					</div>
					<div class="desc">
						Simply Type your Suburb Above and you will be provided with an instant price across our Range.
					</div>
				</div>
			</div>
			<div class="col-lg-4 offset-xl-1">
				<div class="seven-day-skip-info">
					<img src="<?php echo get_template_directory_uri() ?>/image/home-hero-right-info.svg" alt="West Coast Info" width="100%">
					<div class="title">
						7-Day Skip Bin hire direct to your home covering Perth to Albany
					</div>
				</div>
			</div>
		</div>

		<div class="home-hero-slider">
			<div class="slider">
				<div class="slider-wrapper">
					<div class="slide">
						<div class="image">

						</div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri() ?>/image/Tree-truck-01.svg" alt="Truck">
							</div>
							<div class="info">
								We deliver the right skip bin for your residential and commercial projects.
							</div>
							<div class="slider-nav">
								<a href="#"><i class = "fa fa-arrow-circle-left"></i></a>
								<a href="#"><i class = "fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-product-info">

	<div class="home-special-offer-background-overlay">
		<div class="container">
			<div class="home-special-offer">
				<div class="discount-circle">
					<div class="abs-holder">
						<div class="save">Save</div>
						<div class="percent">20%</div>
					</div>
				</div>
				<div class="entry-content">
					<div class="title">15 Day Store Special on 9m3 Skip Bins</div>
					<div class="desc">BIN SERVICES- Perth, Fremantle, Kwinana, Rockingham, Mandurah, Pinjarra, Waroona, Harvey, Australind, Bunbury, Busselton, Margaret River</div>
					<a href="#" class="button">Find out more Information</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
