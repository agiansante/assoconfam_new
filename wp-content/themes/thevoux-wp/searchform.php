<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$search_unique_id = wp_unique_id( 'search-form-' );

?>
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $search_unique_id ); ?>" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'thevoux' ); ?></label>
	<input type="text" id="<?php echo esc_attr( $search_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
</form>
