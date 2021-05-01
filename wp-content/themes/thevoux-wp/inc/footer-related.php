<?php

/* Footer Logo */
function thb_footer_logo() {
	$toggle = ot_get_option( 'subfooter_logo', 'off' );
	if ( $toggle === 'on' ) {

			$footer_logo_upload = ot_get_option( 'subfooter_logo_upload', Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/logo.png' );
		?>
		<div class="footer-logo-holder">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logolink" title="<?php bloginfo( 'name' ); ?>">
				<img src="<?php echo esc_url( $footer_logo_upload ); ?>" class="logoimg" loading="lazy" alt="<?php bloginfo( 'name' ); ?>"/>
			</a>
		</div>
		<?php
	}
}
add_action( 'thb_footer_logo', 'thb_footer_logo', 1 );

// Footer Items.
function thb_footer_items() {
	if ( 'on' === ot_get_option( 'scroll_totop', 'on' ) ) {
		?>
		<a href="#" title="<?php esc_attr_e( 'Scroll To Top', 'thevoux' ); ?>" id="scroll_totop">
			<?php get_template_part( 'assets/svg/arrow_prev.svg' ); ?>
		</a>
		<?php
	}
	if ( 'on' === ot_get_option( 'selection_sharing', 'off' ) ) {
		$selection_sharing_type = ot_get_option( 'selection_sharing_buttons' ) ? ot_get_option( 'selection_sharing_buttons' ) : array();
		$twitter_user           = ot_get_option( 'twitter_bar_username', 'fuel_themes' );
		?>
	<div id="thbSelectionSharerPopover" class="thb-selectionSharer" data-appid="<?php echo esc_attr( ot_get_option( 'selection_sharing_appid' ) ); ?>" data-user="<?php echo esc_attr( $twitter_user ); ?>">
		<div id="thb-selectionSharerPopover-inner">
			<ul>
				<?php if ( in_array( 'twitter', $selection_sharing_type, true ) ) { ?>
				<li><a class="action twitter" href="#" title="<?php esc_attr_e( 'Share this selection on Twitter', 'thevoux' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>
				<?php if ( in_array( 'facebook', $selection_sharing_type, true ) ) { ?>
				<li><a class="action facebook" href="#" title="<?php esc_attr_e( 'Share this selection on Facebook', 'thevoux' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>
				<?php if ( in_array( 'email', $selection_sharing_type, true ) ) { ?>
				<li><a class="action email" href="#" title="<?php esc_attr_e( 'Share this selection by Email', 'thevoux' ); ?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
		<?php
	}
}
add_action( 'wp_footer', 'thb_footer_items', 3 );

// Cookie Bar.
function thb_add_cookiebar() {
	get_template_part( 'inc/templates/header/cookie-bar' );
}
add_action( 'wp_footer', 'thb_add_cookiebar', 10 );

