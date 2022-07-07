<?php  get_header(); ?>
<div id="primary" class="content_body">
        
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry_title"><?php the_title(); ?></h2>

		<p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
	</header><!-- .entry-header -->
	
	<div id="blog-content">
		<div class="entry-content container">
			<div class="left-content">
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
						// print_r($terms)	;	 
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
			</div>
			<?php echo get_sidebar(); ?>

		</div><!-- .entry-content -->
	</div>
</article>

<?php endwhile; ?>
        

</div><!--#primary-->
<?php get_footer(); ?>