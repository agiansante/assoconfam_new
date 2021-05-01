<?php
add_filter( 'excerpt_length', 'thb_supershort_excerpt_length' );

?>
<article itemscope itemtype="http://schema.org/Article" <?php post_class( 'post style17' ); ?>>
	<div class="row">
		<div class="small-12 medium-5 large-6 columns">
			<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-gallery">
				<?php do_action( 'thb_post_icon' ); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'thevoux-vertical-2x' ); ?></a>
			</figure>
			<?php } ?>
		</div>
		<div class="small-12 medium-7 large-6 columns">
			<div class="post-style17-inner">
				<?php do_action( 'thb_post_top', true, true ); ?>
				<?php do_action( 'thb_displayTitle', 'h2' ); ?>
				<?php do_action( 'thb_post_author' ); ?>
				<div class="post-content small">
					<?php the_excerpt(); ?>
					<?php get_template_part( 'inc/templates/postbits/post-links-style2' ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php do_action( 'thb_PostMeta' ); ?>
</article>
