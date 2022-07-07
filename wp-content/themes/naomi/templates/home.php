<?php
/**Template Name: Homepage */
get_header();


/* Start the Loop */
while ( have_posts() ) :
	the_post();
?>
<div id="wrapper-main">
<div id="content">   
            <div class="a-section">
                
                    <div class="container wrap-top">

                        <!-- <a class="top-logo" href="">
                            <img src="./assets/img/logo_top.png" alt="">
                        </a> -->
                        <div class="image-left">
						<?php if( get_field('banner_home') ): ?>
							<img src="<?php the_field('banner_home'); ?>" />
						<?php endif; ?>
                        </div>
                        <div class="image-right">
                            <img src="<?php the_field('banner_avatar'); ?>" />
                        </div>

                    </div>
                
                
            </div>
            

            <div  id="b-section">
                <div class="intro container">
                     <?php the_field('intro_content'); ?>
                    <br> 
                    <a class="read-more" href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/but_readmore_index.png" alt="">
                    </a>
                </div>
            </div>

            <div  id="c-section">
                <div class="blog container"> 
                    <h3 class="blog-title">
                       <a href="">
                           <img class="title-image " src="<?php echo get_template_directory_uri(); ?>/img/naomi/title_blog.png" alt="">
                       </a>
                    </h3>

                    <div class="row justify-center">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_count'=> '8',
                            );
                            $the_query = new WP_Query( $args );

                        ?>   
                        <?php if ( $the_query->have_posts()) : 
                             while ( $the_query->have_posts()) :
                              $the_query -> the_post(); ?>
                                    <div class="col-4">
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
                                                    <p>
                                                        <?php $post_date =  get_the_date('l F j, Y' ); echo $post_date; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>   
                        
                    </div>

                    <div class="blog-link"> 
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/button_blog_update.png" alt="">
                        </a>
                    </div>

                </div>       
            </div> 
            <div  id="d-section">
                <div class="container">
                    <div class="policy-title">
                        <a href="">
                            <img  src="<?php echo get_template_directory_uri(); ?>/img/naomi/title_policy.png" alt="">
                        </a>
                    </div>
                    <div class="policy-link">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/button_policy.png" alt="">
                        </a>
                    </div>
                    <div class="policy-main row">
                        
                        <?php 
                            $card = get_field('list_of_policy');
                            if(!empty($card)):
                                foreach($card as $i):
                                    $image = $i['policy_image'];
                                    $link = $i['policy_link'];?>
                                        <div class="col-3 padding-policy">
                                            <div class="policy-card">
                                                <div class="policy-img">
                                                    <a href="<?php echo $link ?>">
                                                    <img src="<?php echo $image; ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                            
                        <?php endforeach; endif; ?>
                    </div>
                    
                    <div class="policy-button">
                        <a href="">
                            <img  src="<?php echo get_template_directory_uri(); ?>/img/naomi/button_sm_policy.png" alt="">
                        </a>
                    </div>
                    <div class="detail-policy-button">
                        <a href="">
                            <img src="<?php the_field('detail_policy_banner'); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div  id="e-section">
                <div class="container">
                    <div class="content-profile">
                        <div class="intro-profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/title_profile_home.png" alt="">
                            <?php the_field('profile_content') ?>
                            <div class="link-profile">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/button_sm_profile.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="profile-img">
                            <img src="<?php  the_field('profile_image') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div id="f-section">
                <div class="container">
                    <div class="fb-info">
                        <div class="avatar">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/avt_profile.png" alt="">
                            </a>
                        </div>
                        <div class="fb-content">
                            <a href="">
                                <span class="fb-name">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/text-facebook.png" alt="">
                                </span>
                            </a>
                            <p>
                                近況報告をしてます。
                            </p>
                            <a class="fb-click" href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/fb-link.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="g-section">
                    <div class="container">
                        <div class="brand-title">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/naomi/title_brand.png" alt="">                 
                        </div>
                        <div class="brand-link">
                                <?php $brand = get_field('brand_information');
                                if(!empty($brand)):
                                    foreach($brand as $j):
                                        $brand_img = $j['brand_image'];
                                        $brand_link = $j['brand_link'];?>
                                        <a href="<?php echo $brand_link ?>">
                                        <img src="<?php echo $brand_img ?>" alt="">
                                        </a>
                                <?php endforeach; endif; ?>
                        </div>

                    </div>  
            </div>
            
        </div>
</div> <!--#wrapper-main-->
<?php
endwhile;  // End of the loop.

get_footer();