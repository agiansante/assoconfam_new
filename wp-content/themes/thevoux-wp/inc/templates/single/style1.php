<?php
	$fixed         = ot_get_option( 'article_fixed_sidebar', 'on' );
	$fullwidth_get = filter_input( INPUT_GET, 'full_width', FILTER_SANITIZE_STRING );
	$fullwidth     = $fullwidth_get ? $fullwidth_get : ot_get_option( 'article_fullwidth', 'off' );
	$gallery_style = get_post_meta( get_the_ID(), 'gallery_style', true );
?>
<div class="post-detail-row">
	<div class="row">
		<div class="small-12 medium-12 <?php echo esc_attr( 'on' === $fullwidth ? 'large-12' : 'large-8' ); ?> columns">
			<article itemscope itemtype="http://schema.org/Article" <?php post_class( 'post post-detail post-detail-style1' ); ?> id="post-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" data-url="<?php the_permalink(); ?>">
				<div class="post-title-container">
					<?php do_action( 'thb_ads_before_title' ); ?>
					<?php do_action( 'thb_post_top', true, true ); ?>
					<header class="post-title entry-header">
						<h1 class="entry-title" itemprop="headline">
							<?php if ( wp_doing_ajax() ) { ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<?php } else { ?>
								<?php the_title(); ?>
							<?php } ?>
						</h1>
					</header>
					<?php do_action( 'thb_post_author' ); ?>
				</div>
				<?php
				// The following determines what the post format is and shows the correct file accordingly
				$format = get_post_format();

				if ( $format ) {
					set_query_var( 'thb_image_size', 'thevoux-single-2x' );
					if ( 'gallery' !== $format || ( 'gallery' === $format && 'style2' !== $gallery_style ) ) {
						get_template_part( 'inc/templates/postbits/' . $format );
					}
				} else {
					get_template_part( 'inc/templates/postbits/standard' );
				}
				?>
				<div class="post-share-container">
					<?php do_action( 'thb_social_article_detail', false, true, 'show-for-medium' ); ?>
					<div class="post-content-container">
						<?php do_action( 'thb_ads_before_content' ); ?>
						<div class="post-content entry-content cf" data-first="<?php echo esc_attr( thb_FirstLetter() ); ?>" itemprop="articleBody">
							<?php echo the_content(); ?>
							<?php
							if ( $format == 'gallery' && $gallery_style == 'style2' ) {
								get_template_part( 'inc/templates/postbits/gallery-style2' );
							}
							?>
							<?php
								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thevoux' ),
										'after'  => '</div>',
									)
								);
								?>
							<?php get_template_part( 'inc/templates/postbits/post-shopthelook' ); ?>
							<?php do_action( 'thb_post_review' ); ?>
							<?php do_action( 'thb_ads_after_content' ); ?>
							<?php get_template_part( 'inc/templates/postbits/tags' ); ?>
							<?php get_template_part( 'inc/templates/postbits/author' ); ?>
							<?php get_template_part( 'inc/templates/postbits/post-nav' ); ?>
						</div>
					</div>
				</div>
				<?php do_action( 'thb_social_article_detail', false, false, 'hide-for-medium' ); ?>
				<?php do_action( 'thb_PostMeta' ); ?>
			</article>
			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<?php if ( ! wp_doing_ajax() && ot_get_option( 'related_posts', 'on' ) !== 'off' ) { ?>
				<?php get_template_part( 'inc/templates/postbits/post-related' ); ?>
			<?php } ?>
		</div>
		<?php if ( 'off' === $fullwidth ) { ?>
			<?php
			if ( wp_doing_ajax() ) {
				get_sidebar( 'single-ajax' );
			} else {
				get_sidebar( 'single' ); }
			?>
		<?php } ?>
	</div>
	<?php
	if ( wp_doing_ajax() ) {
		do_action( 'thb_ads_after_article_ajax' );
	} else {
		do_action( 'thb_ads_after_article' ); }
	?>
</div>
