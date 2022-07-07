<?php
/*
Template Name: Portfolio Page
*/
?>
<?php  get_header(); ?>

<div id="primary" class="content-area">
   <div class="content_inc">
      <div class="wauto content_container news_template">
                    
	<div class="entry_content">
	<header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
      
    <div class="row index_news_loop clear">
    
    <?php	
	$width = 100;
	$height = 100;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3, 'post_status' => 'publish', 'paged'=>$paged ) ); ?> 
	
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="col-lg-4">
	    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="loop_news_thumbnail">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php $thumb_sin = get_post_thumbnail_id();
			$img_url_sin = wp_get_attachment_url( $thumb_sin,'full' ); 
			$image_sin = aq_resize(wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $width, $height, true );
			if(!empty($img_url_sin) && $img_url_sin!="" ):
			echo '<img class="lazy-load lazy_resize kkk" src="'.$image_sin.'" width="'.$width.'" height="'.$height.'"  alt="" />';	
			else:
				the_post_thumbnail('lazy-load'); 
			endif; ?></a>
            </div>
        <h4 class="loop_news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="date"><?php echo get_the_date('d/m/Y'); ?></p>
            <div class="loop_news_excerpt"><?php the_excerpt(); ?></div>
			<p class="wp-posts-carousel-categories">
												<?php 
												$terms = get_the_terms( $post->ID, 'portfolio_category');	
												foreach ($terms as $term){
													$name_term = $term->name;	
													?>
														<p> <?php echo $name_term; ?> </p>
												<?php }; ?></p>
	    </article>
    </div>


<?php endwhile; ?>
    
     </div>
     
     <div class="pagenavi_content clear">
	                   <?php 
							if(!wp_pagenavi(array( 'query' => $loop ))):
								echo "";
								
								else:
					  			 wp_pagenavi(array( 'query' => $loop )); 
							endif;
						?>
						</div><!--pagenavi_content--> 
                         <?php 
						 	wp_reset_postdata();
							
						?>
                    </div><!--entry_content-->
                
            
      </div><!--news_template-->
        
        
        
   </div><!--.content_inc-->
</div><!--#primary-->
<?php get_footer(); ?>