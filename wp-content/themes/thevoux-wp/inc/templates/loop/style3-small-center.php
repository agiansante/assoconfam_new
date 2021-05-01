<?php
	add_filter( 'excerpt_length', 'thb_supershort_excerpt_length' );

	$classes[] = 'post style3';
	$classes[] = 'style3-small-center';
	$classes[] = 'offset-title'
?>
<article itemscope itemtype="http://schema.org/Article" <?php post_class( $classes ); ?>>
	<figure class="post-gallery">
		<?php do_action( 'thb_post_icon' ); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'thevoux-vertical-2x' ); ?></a>
		<div class="offset-title-container">
			<?php do_action( 'thb_post_top', true, false ); ?>
			<?php do_action( 'thb_displayTitle', 'h4' ); ?>
		</div>
	</figure>
	<div class="post-content small">
		<?php the_excerpt(); ?>
	</div>
	<?php do_action( 'thb_PostMeta' ); ?>
</article>
