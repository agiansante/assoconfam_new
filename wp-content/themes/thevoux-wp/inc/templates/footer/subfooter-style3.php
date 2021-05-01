<?php
	$subfooter_color   = ot_get_option( 'subfooter_color', 'light' );
	$subfooter_content = ( isset( $_GET['subfooter_content'] ) ? htmlspecialchars( $_GET['subfooter_content'] ) : ot_get_option( 'subfooter_content', 'footer-text' ) );

	$classes[] = $subfooter_color;
	$classes[] = 'style3';
?>
<?php if ( ot_get_option( 'subfooter' ) !== 'off' ) { ?>
<!-- Start Sub-Footer -->
<aside id="subfooter" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<div class="row align-middle subfooter-row">
		<div class="small-12 medium-4 columns text-center medium-text-left menu-container">
			<?php
			wp_nav_menu(
				array(
					'menu'      => ot_get_option( 'subfooter_menu' ),
					'depth'     => 1,
					'container' => false,
				)
			);
			?>
		</div>
		<div class="small-12 medium-4 columns text-center copyright-container">
			<?php do_action( 'thb_footer_logo', true ); ?>
			<p><?php echo do_shortcode( ot_get_option( 'subfooter_text' ) ); ?></p>
		</div>
		<div class="small-12 medium-4 columns text-center medium-text-right">
			<?php do_action( 'thb_social' ); ?>
		</div>
	</div>
</aside>
<!-- End Sub-Footer -->
<?php } ?>
