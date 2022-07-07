<?php


	get_header(); ?>
	
	<div >
		<div class="container clear">
			<?php if ( have_posts() ) : ?>
				<div id="blog-content">
					<?php 	
							?>
								<?php while ( have_posts() ) : the_post(); ?>
										<div class="col-4-store">
											<div class="">             
												<div class="">
													<a href="<?php echo get_permalink(); ?>">
														<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
													</a>
												</div>
												<div class="blog-info">
													<div class="detail">
														<a href="<?php echo get_permalink(); ?>">
																	<h4>	
																		<?php echo get_the_title(); ?> 
																	</h4>	
														<p class="wp-posts-carousel-categories">
															<?php 
															$terms = get_the_terms( $post->ID, 'store_category');	
															foreach ($terms as $term){
																$name_term = $term->name;	
																?>
																	<p> <?php echo $name_term; ?> </p>
															<?php }; ?></p>
															<p class="wp-posts-carousel-categories">
																<?php 
																	$terms = get_the_terms( $post->ID, 'city');	
																		foreach ($terms as $term){
																		$name_term = $term->name;	
																		$link_term = get_term_link($term);	
																		?>
																		<a href="<?php echo $link_term; ?>">
																			<p> <?php echo $name_term; ?> </p>
																		</a>
																	<?php }; ?></p></a>
														</div>
												</div>
												</div>
											</div>
										<?php endwhile; ?>
						<?php //endforeach; endif; ?>

						<div class="page-navigation">
							<?php //wp_pagenavi(); wp_reset_query()?>
						</div>
						</div>
				</div>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php ?>
	

<?php get_footer(); ?>
