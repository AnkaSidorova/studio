<?php
/**
 * The template for displaying search form
 *
 * @package Catch Themes
 * @subpackage Studio
 * @since Studio 0.4
 */
?>

<?php $search_text 	= get_theme_mod( 'search_text', studio_get_default_theme_options( 'search_text' ) ); // Get options ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'studio' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( $search_text ); ?>" value="<?php the_search_query(); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'studio' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'studio' ); ?>">
</form>
