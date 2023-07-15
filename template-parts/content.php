<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sanai
 */
$taxonomy = 'category'; 
$primary_cat_id=get_post_meta(get_the_id(),'_yoast_wpseo_primary_' . $taxonomy, true);
if($primary_cat_id){
    $primary_cat = get_term($primary_cat_id, $taxonomy);
}
else{
	$primary_cat = wp_get_post_categories( get_the_id())[0];
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('singlePostContainer highRadius highPadding highMargined'); ?>>
	<div class="generalHeading highMargined centeredText singlePostHeading">
			<h1><?php echo get_the_title(); ?></h1>
			<span>
				<div class="archiveCartItem">
					<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 505.2A249.2 249.2 0 0 1 6.8 256 249.2 249.2 0 0 1 256 6.8 249.2 249.2 0 0 1 505.2 256 249.2 249.2 0 0 1 256 505.2Zm0-473.4C132.3 31.8 31.8 132.3 31.8 256S132.3 480.2 256 480.2 480.2 379.7 480.2 256 379.7 31.8 256 31.8Z"/><path d="M256 264.6a85.5 85.5 0 1 1 85.5-85.5 85.6 85.6 0 0 1-85.5 85.5Zm0-146a60.5 60.5 0 1 0 60.5 60.5 60.5 60.5 0 0 0-60.5-60.5Zm0 299.8c-31.1 0-61.4-3-85.4-8.4-29.1-6.5-48.3-16.4-57.2-29.3-10.2-14.8-10.2-29.3-10.1-30.9.5-20.7 15.1-34.8 20.6-40 32.3-31.3 109.3-33.7 132.1-33.7s99.8 2.4 132.1 33.7c5.5 5.3 20.1 19.3 20.6 40 .1 1.6.1 16.1-10.1 30.9-8.9 12.9-28.1 22.8-57.2 29.3-24 5.4-54.3 8.4-85.4 8.4Zm-127.7-68.1a31.7 31.7 0 0 0 5.7 16.2c9.2 13.4 54 26.9 122 26.9s112.8-13.5 122-26.9l10.3 7.1-10.3-7.1a31.4 31.4 0 0 0 5.7-16c-.2-10.5-9.1-19.1-12.9-22.8-16.5-15.9-62.7-26.6-114.8-26.6s-98.3 10.7-114.8 26.6c-3.8 3.7-12.6 12.2-12.9 22.6Z"/></svg>
					<span><?php echo get_the_author(); ?></span>
				</div>
				<div class="archiveCartItem">
					<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 492.6A236.6 236.6 0 0 1 88.7 88.7a236.6 236.6 0 1 1 334.6 334.6A235 235 0 0 1 256 492.6Zm0-449.5C138.6 43.1 43.1 138.6 43.1 256S138.6 468.9 256 468.9 468.9 373.4 468.9 256 373.4 43.1 256 43.1Z"/><path d="M315.3 379.4a11.9 11.9 0 0 1-8.5-3.6L237 304V125.5a11.9 11.9 0 1 1 23.7 0v168.9l63.1 64.9a11.8 11.8 0 0 1-8.5 20.1Z"/></svg>
					<span><?php echo get_the_date(); ?></span>
				</div>
			</span>
		</div>

	<?php sanai_post_thumbnail(); ?>
	<div class="mainCategorySection mediumMargined">
		<a class="lowRadius" href="<?php echo get_term_link( $primary_cat ); ?>"><?php echo $primary_cat->name ?></a>
	</div>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sanai' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sanai' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
