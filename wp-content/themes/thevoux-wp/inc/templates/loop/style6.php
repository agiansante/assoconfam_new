<?php
	add_filter( 'excerpt_length', 'thb_short_excerpt_length' );

	$disable_excerpts = get_query_var( 'disable_excerpts' ) ? get_query_var( 'disable_excerpts' ) : false;
	$disable_postmeta = get_query_var( 'disable_postmeta' ) ? get_query_var( 'disable_postmeta' ) : false;
	$thb_image_size   = get_query_var( 'thb_image_size' ) ? get_query_var( 'thb_image_size' ) : 'thevoux-style1-2x';
	$thb_title_size   = get_query_var( 'thb_title_size' ) ? get_query_var( 'thb_title_size' ) : 'h5';
?>
<article itemscope itemtype="http://schema.org/Article" <?php post_class( 'post style6' ); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
	<figure class="post-gallery">
		<?php do_action( 'thb_post_icon' ); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( $thb_image_size ); ?></a>
	</figure>
	<?php } ?>
	<?php if ( $disable_postmeta !== 'true' ) { ?>
		<?php do_action( 'thb_post_top', true, true ); ?>
	<?php } ?>
	<?php do_action( 'thb_displayTitle', $thb_title_size ); ?>
	<?php if ( $disable_excerpts !== 'true' ) { ?>
	<div class="post-content small">
		<?php the_excerpt(); ?>
	</div>
	<?php } ?>
	<?php do_action( 'thb_PostMeta' ); ?>
</article>
