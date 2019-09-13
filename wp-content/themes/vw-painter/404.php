<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Painter
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
        <div class="page-content">
        	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-painter' ), esc_html__( 'Not Found', 'vw-painter' ) ) ?></h1>	
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-painter' ); ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-painter' ); ?></p>
			<div class="error-btn">
        		<a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'Return to the home page', 'vw-painter' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Return to the home page','vw-painter' );?></span></a>
			</div>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>