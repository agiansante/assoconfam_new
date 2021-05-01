<?php
	$footer_color             = ot_get_option( 'footer_color', 'light' );
	$footer_columns           = ot_get_option( 'footer_columns', 'threecolumns' );
	$footer_center_align      = ot_get_option( 'footer_center_align', 'on' ) === 'on' ? 'center-align' : '';
	$footer_widget_borders    = ot_get_option( 'footer_widget_borders', 'on' ) === 'on' ? '' : 'no-borders';
	$footer_widget_text_align = ot_get_option( 'footer_widget_text_align' );
	$footer_grid              = 'off' !== ot_get_option( 'footer_grid' ) ? '' : 'full-width-row';

	$classes[] = 'style1';
	$classes[] = $footer_widget_text_align;
	$classes[] = $footer_widget_borders;
	$classes[] = $footer_color;
?>
<?php if ( 'off' !== ot_get_option( 'footer' ) ) { ?>
<!-- Start Footer -->
<!-- Please call pinit.js only once per page -->
<footer id="footer" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<div class="row no-padding <?php echo esc_attr( $footer_grid . ' ' . $footer_center_align ); ?>">
		<?php if ( $footer_columns === 'fourcolumns' ) { ?>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'threecolumns' ) { ?>
			<div class="small-12 medium-6 large-4 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-12 medium-6 large-4 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-12 large-4 columns">
					<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'twocolumns' ) { ?>
			<div class="small-12 medium-6 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-12 medium-6 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'doubleleft' ) { ?>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-12 medium-6 large-6 columns">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'doubleright' ) { ?>
			<div class="small-12 medium-6 large-6 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
					<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'fivecolumns' ) { ?>
			<div class="small-12 medium-6 thb-5 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-12 medium-6 thb-5 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-12 medium-6 thb-5 columns">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
			<div class="small-12 medium-6 thb-5 columns">
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>
			<div class="small-12 thb-5 columns">
				<?php dynamic_sidebar( 'footer5' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'onecolumns' ) { ?>
			<div class="small-12 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'sixcolumns' ) { ?>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer5' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer6' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'fivelargerightcolumns' ) { ?>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>
			<div class="small-6 medium-8 large-4 columns">
				<?php dynamic_sidebar( 'footer5' ); ?>
			</div>
		<?php } elseif ( $footer_columns === 'fivelargeleftcolumns' ) { ?>
			<div class="small-6 medium-8 large-4 columns">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>
			<div class="small-6 medium-4 large-2 columns">
				<?php dynamic_sidebar( 'footer5' ); ?>
			</div>
		<?php } ?>
	</div>
</footer>
<!-- End Footer -->
<?php } ?>
