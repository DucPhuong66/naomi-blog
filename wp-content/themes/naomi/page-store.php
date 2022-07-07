<?php
/*
Template Name: Store Page
*/
?>
<?php  get_header(); ?>

<div id="primary" class="content-area">
   <div class="content_inc">
      <div class="auto content_container news_template">
                    
	<div class="entry_content">
	<header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
    <div class="mt-store">
    
    </div>
    <div class="row index_news_loop clear">
    
    <?php	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$loop = new WP_Query( array( 'post_type' => 'store', 'posts_per_page' => -1, 'post_status' => 'publish', 'paged'=>$paged ) ); ?> 
	    <?php 
        $terms = get_terms( 'city' );
        foreach ( $terms as $term ):
            
            wp_reset_query();
            $args = array('post_type' => 'store',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'city',
                        'field' => 'slug',
                        'terms' => $term->slug,
                    ),
                ),
            );
            $loop = new WP_Query($args);
            if($loop->have_posts()): ?>
           
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-4-store">
                    <h2><?php echo $term->name ?></h2>
                        <div class="blog-card">             
                            <div class="blog-img">
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
                                    </a>
                                    <p class="wp-posts-carousel-categories">    
                                    <?php 
                                    $stores = get_the_terms( $post->ID, 'store_category');	
                                    foreach ($stores as $store){
                                        $name_store = $store->name;	
                                        ?>
                                            <p> <?php echo $name_store; ?> </p>
                                    <?php }; ?></p>

                                    <p class="wp-posts-carousel-categories">
                                    <?php 
                                    $cities = get_the_terms( $post->ID, 'city');	
                                    foreach ($cities as $city){
                                        $name_city = $city->name;	
                                        ?>
                                            <p> <?php echo $name_city; ?> </p>
                                    <?php }; ?></p>
                                    <p class="wp-posts-carousel-categories">
                                   </p></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endwhile; ?>
            <?php endif; 
             endforeach; ?>        
     </div>

    <div class="container">
        <div class="select-time">
                            <h2>
                               City
                            </h2>
                            <select name="city-name"  id="Sl-city">
                                <?php 
                                $all_cities = get_terms('city');
                                foreach ($all_cities as $City):
                                    $city_name = $City->name;
                                ?>
                                <option value="<?php echo $City->term_id; ?>"><?php echo $city_name; ?></option>
                                <?php endforeach; ?>
                            </select>
        </div>
        <div class="select-time" >
                            <h2>
                               Store Category
                            </h2>
                            <select name="store-name" id="Sl-store">
                                <?php 
                                $all_stores = get_terms('store_category');
                                foreach ($all_stores as $Store):
                                    $store_name = $Store->name;
                                ?>
                                <option value="<?php echo $Store->term_id; ?>"><?php echo $store_name; ?></option>
                                <?php endforeach; ?>
                            </select>
        </div>
    </div>
    
                                

     <div class="pagenavi_content clear">
	                   <?php 
							/* if(!wp_pagenavi(array( 'query' => $loop ))):
								echo "";
								
								else:
					  			 wp_pagenavi(array( 'query' => $loop )); 
							endif; */
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