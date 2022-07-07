<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

	get_header(); ?>
	<div class="container category-title">
			<?php 
			$categories = get_the_category();
			foreach ($categories as $cat){
				$cat_name = get_cat_name($cat->term_id);
				?>
				<h1><?php echo $cat_name; ?></h1>
			<?php }; ?>
	</div>
	<div id="primary" class="content_body">
		<div class="container clear">
			
		<?php if ( have_posts() ) : ?>
			<div id="blog-content">
				<div class="left-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
									<div class="box-content">
										<h1>
											<?php echo get_the_title(); ?>
										</h1>
										<span class="date">
											<?php $post_date =  get_the_date('l F j, Y' ); echo $post_date; ?>
										</span>
										<hr>
										<div class="content-detail"> 
											<?php echo get_the_content(); ?>
										</div>
									
										<hr>
										<div class="social-media">
											<?php 
											$categories = get_the_category();
											foreach ($categories as $cat){
												$cat_img = get_field('image_category','category_'.$cat->term_id); 
												$link_cat = get_category_link($cat->term_id);
												?>
												<a href="<?php echo $link_cat; ?>">
													<img src="<?php echo $cat_img ?>" alt="">
												</a>
											<?php }; ?>
										</div>
									<!-- .entry-content -->
								</div>
							</article>
							<?php endwhile; ?>
					</div>
				<?php get_sidebar(); ?>
			</div>
				<div class="page-navigation">
					<?php wp_pagenavi(); wp_reset_query()?>
				</div>
		
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php ?>
	

<?php get_footer(); ?>
