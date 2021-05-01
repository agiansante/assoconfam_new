<?php function thb_postslider( $atts, $content = null ) {
	$source   = '';
	$autoplay = false;
	$atts     = vc_map_get_attributes( 'thb_postslider', $atts );
	extract( $atts );

	$source       .= '|offset:' . $offset;
	$source_data   = VcLoopSettings::parseData( $source );
	$query_builder = new ThbLoopQueryBuilder( $source_data );
	$posts         = $query_builder->build();
	$posts         = $posts[1];

	$element_id = uniqid( 'thb-post-slider-' );
	$pattern    = '/^(\d*(?:\.\d+)?)\s*(px|\%|in|cm|mm|em|rem|ex|pt|pc|vw|vh|vmin|vmax)?$/';

	$rand = wp_rand( 10, 99 );

	$pagi = 'true' === $pagination ? 'true' : 'false';
	$nav  = 'true' === $navigation ? 'true' : 'false';

	ob_start();
	$classes[] = 'slick';
	$classes[] = 'thb-post-slider';
	$classes[] = $style;
	$classes[] = ( 'featured-style3' === $style || 'featured-style9' === $style ) ? 'dark-pagination' : '';
	$classes[] = 'featured-style10' === $style ? 'fly-nav' : false;
	$classes[] = 'featured-style13' === $style ? 'bottom-left-nav' : false;
	$classes[] = 'featured-style14' === $style ? 'equal-height bottom-right-nav' : false;
	$classes[] = 'featured-style8' === $style ? 'equal-height' : false;
	$classes[] = in_array( $style, array( 'featured-style9', 'featured-style9 offset' ), true ) ? 'center-arrows' : false;

	if ( $posts->have_posts() ) { ?>
	<div id="<?php echo esc_attr( $element_id ); ?>" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" data-columns="1" data-pagination="<?php echo esc_attr( $pagi ); ?>" data-navigation="<?php echo esc_attr( $nav ); ?>" data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-autoplay-speed="<?php echo esc_attr( $autoplay_speed ); ?>">
		<?php
		while ( $posts->have_posts() ) :
			$posts->the_post();
			?>
		<div>
			<?php
			if ( 'featured-style14' === $style ) {
				get_template_part( 'inc/templates/loop/post-slider/post-slider-full-right' );
			} elseif ( 'featured-style13' === $style ) {
				get_template_part( 'inc/templates/loop/post-slider/post-slider-full-left' );
			} elseif ( 'featured-style11' === $style ) {
				get_template_part( 'inc/templates/loop/post-slider/post-slider-full' );
			} elseif ( 'featured-style12' === $style ) {
				get_template_part( 'inc/templates/loop/post-slider/post-slider-left' );
			} else {
				$style_old = $style;
				$class     = '';
				$class     = in_array( $style_old, array( 'featured-style10', 'featured-style8' ), true ) ? $class . ' light-title' : $class;
				$class     = in_array( $style_old, array( 'featured-style1', 'featured-style3', 'featured-style5', 'featured-style8', 'featured-style9', 'featured-style9 offset' ), true ) ? $class . ' center-category' : $class;
				set_query_var( 'thb_style', $style );
				set_query_var( 'thb_class', $class );
				if ( in_array( $style_old, array( 'featured-style10' ), true ) ) {
					set_query_var( 'thb_image_size', 'thevoux-style1-2x' );
				} elseif ( in_array( $style_old, array( 'featured-style3', 'featured-style5' ), true ) ) {
					set_query_var( 'thb_image_size', 'thevoux-style9-2x' );
				}
				get_template_part( 'inc/templates/loop/post-slider/post-slider' );
			}
			?>
		</div>
		<?php endwhile; ?>
	</div>
		<?php if ( $thb_slider_height || $thb_slider_height_mobile ) { ?>
		<style>
			<?php
			if ( $thb_slider_height ) {
				$regexr            = preg_match( $pattern, $thb_slider_height, $matches );
				$value             = isset( $matches[1] ) ? (float) $matches[1] : (float) $thb_slider_height;
				$unit              = isset( $matches[2] ) ? $matches[2] : 'px';
				$thb_slider_height = $value . $unit;
				?>
					@media screen and ( min-width: 768px ) {
						#<?php echo esc_attr( $element_id ); ?> .wp-post-image {
							height: <?php echo esc_attr( $thb_slider_height ); ?>
						}
						<?php if ( in_array( $style, array( 'featured-style11', 'featured-style12', 'featured-style14' ), true ) ) { ?>
							#<?php echo esc_attr( $element_id ); ?> .post {
								height: <?php echo esc_attr( $thb_slider_height ); ?>
							}
							#<?php echo esc_attr( $element_id ); ?> .post.featured-style14 .image-side {
								min-height: 0;
								height: <?php echo esc_attr( $thb_slider_height ); ?>
							}
							#<?php echo esc_attr( $element_id ); ?> .post.featured-style11 {
								height: <?php echo esc_attr( $thb_slider_height ); ?>
							}
							#<?php echo esc_attr( $element_id ); ?> .wp-post-image {
								height: 100%;
							}
						<?php } ?>
					}
			<?php } ?>
			<?php
			if ( $thb_slider_height_mobile ) {
				$regexr            = preg_match( $pattern, $thb_slider_height_mobile, $matches );
				$value             = isset( $matches[1] ) ? (float) $matches[1] : (float) $thb_slider_height_mobile;
				$unit              = isset( $matches[2] ) ? $matches[2] : 'px';
				$thb_slider_height = $value . $unit;
				?>
					@media screen and ( max-width: 768px ) {
						#<?php echo esc_attr( $element_id ); ?> .wp-post-image {
							height: <?php echo esc_attr( $thb_slider_height ); ?>;
						}
						<?php if ( in_array( $style, array( 'featured-style11', 'featured-style12', 'featured-style14' ), true ) ) { ?>
							#<?php echo esc_attr( $element_id ); ?> .post {
								height: <?php echo esc_attr( $thb_slider_height ); ?>;
							}
							#<?php echo esc_attr( $element_id ); ?> .post.featured-style14 {
								height: auto;
							}
							#<?php echo esc_attr( $element_id ); ?> .post.featured-style14 .image-side {
								min-height: <?php echo esc_attr( $thb_slider_height ); ?>;
								height: <?php echo esc_attr( $thb_slider_height ); ?>;
							}
							#<?php echo esc_attr( $element_id ); ?> .post.featured-style11 {
								height: <?php echo esc_attr( $thb_slider_height ); ?>;
							}
							#<?php echo esc_attr( $element_id ); ?> .wp-post-image {
								height: 100%;
							}
						<?php } ?>
					}
			<?php } ?>
		</style>
	<?php } ?>
		<?php
	}
	set_query_var( 'thb_style', false );
	set_query_var( 'thb_class', false );
	$out = ob_get_clean();

	wp_reset_query();
	wp_reset_postdata();
	return $out;
}
add_shortcode( 'thb_postslider', 'thb_postslider' );
