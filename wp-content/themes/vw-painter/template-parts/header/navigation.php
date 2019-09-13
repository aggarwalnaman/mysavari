<?php
/**
 * The template part for header
 *
 * @package VW Painter 
 * @subpackage vw_painter
 * @since VW Painter 1.0
 */
?>

<button class="toggleMenu toggle" role="tab"><?php esc_html_e('Menu','vw-painter'); ?></button>
<div id="header" class="menubar">
	<nav class="nav" role="navigation">
		<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
	</nav>
</div>