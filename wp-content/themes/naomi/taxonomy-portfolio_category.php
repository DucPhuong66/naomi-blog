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
											$terms = get_the_terms( $post->ID, 'portfolio_category');	
											 foreach ($terms as $term){
												$name_term = $term->name;	
												$link_term = get_term_link($term);	
												?>
												<a href="<?php echo $link_term; ?>">
													<p> <?php echo $name_term; ?> </p>
												</a>
											<?php }; ?>
											</div>				
									</div>		
							<!-- .entry-content -->
							</article>
							<?php endwhile; ?>
						<div class="page-navigation">
							<?php wp_pagenavi(); wp_reset_query()?>
						</div>
						</div>
					<?php get_sidebar(); ?>
				</div>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php ?>
	

<?php get_footer(); ?>
