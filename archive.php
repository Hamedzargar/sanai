<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sanai
 */

get_header();
$currentCategory = get_queried_object();
$postCatsTerms = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => false,
	'exclude'=>array(1)
]);
?>
	<main id="primary" class="site-main mainView">
		<div class="generalHeading highMargined centeredText">
			<h1><?php echo get_the_archive_title(); ?></h1>
			<span>آخرین مطالب منتشر شده در زمینه <?php echo get_the_archive_title(); ?></span>
		</div>
		<div class="catsNav mediumMargined">
			<span>دسته‌بندی‌ها: </span>
			<div class="catsNavWrapper">
				<?php
					foreach($postCatsTerms as $cat){
						if($currentCategory->term_id == $cat->term_id){
							echo '<span class="currentCatNavItem">'.$cat->name.'</span>';
						}
						else{
							echo '<a href="'.get_category_link( $cat->term_id ).'">'.$cat->name.'</a>';
						}
						
					}
				?>
			</div>
		</div>
		<?php if ( have_posts() ) : ?>
			<div class="archiveParent highMargined">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			echo '</div>';
			echo '<div class="archivePagination highMargined">';
			pagination_bar();
			echo '</div>';
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
