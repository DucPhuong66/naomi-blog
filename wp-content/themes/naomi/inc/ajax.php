<?php 
 add_action('wp_ajax_random', 'random_function');
 add_action('wp_ajax_nopriv_random', 'random_function');
 function random_function() {
    echo '<ul>';
       $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&orderby=rand');
       global $wp_query; $wp_query->in_the_loop = true;
       while ($getposts->have_posts()) : $getposts->the_post();
          echo '<li>';
          echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
          echo '</li>';
       endwhile; wp_reset_postdata();
    echo '</ul>';
die(); }

?>