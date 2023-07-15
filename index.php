<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			<h1>بلاگ</h1>
			<span>آخرین نوشته‌های بلاگ کلینیک سنایی</span>
		</div>
		<div class="blogTopBack">
			<div class="blogTop">
				<div class="blogTopCats lightBoxBack mediumRadius mediumPadding">
 					<h4>دسته‌بندی مطالب</h4>
 					<div class="blogCatCard">
					 <?php
						foreach($postCatsTerms as $cat){
							echo '<li><a class="lowPadding" href="'.get_category_link( $cat->term_id ).'">'.$cat->name.'</a></li>';							
						}
					?>
					</div>
				</div>
				<div class="blogTopPosts archiveParent">
					<?php
						$blogTopArgs = array(
							'post_type'=>'post',
							'posts_per_page'=>3
						);
						$blogTopQuery = new WP_Query($blogTopArgs);
						while($blogTopQuery->have_posts()):$blogTopQuery->the_post();
							get_template_part( 'template-parts/content', 'grid' );
						endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="generalHeading highMargined centeredText blogSectionHeading">
			<h2>آخرین نوشته‌ها</h2>
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
