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
			<div class="col-lg-7">
				<div class="skip-bin-info-holder">
					<div class="title">
						<i class="fa fa-arrow-circle-up"></i> Skip Bin Instant Quote
					</div>
					<div class="desc">
						Simply Type your Suburb Above and you will be provided with an instant price across our Range.
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4">
				<img src="<?php echo get_template_directory_uri() ?>/image/home-hero-right-info.svg" alt="West Coast Info" width="100%">
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
