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
						 $categories = get_the_category();
						//  print_r($categories);
						 foreach ($categories as $cat){
							$cat_img = get_field('image_category','category_'.$cat->term_id); 
							$link_cat = get_category_link($cat->term_id);
							?>
							<a href="<?php echo $link_cat; ?>">
								<img src="<?php echo $cat_img ?>" alt="">
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