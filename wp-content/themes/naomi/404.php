<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div class="content_body">
		<div class="container clear">
 <div class="content">
            <h1 class="err_title">404</h1>
            <div class="line"></div>
            <h2>Sorry! Page not found!</h2>
            <h3>Sorry, the page you asked for couldn't be found. If you're in denial and believe this is a conspiracy that can't possibly be true, please try using our search form.</h3>
            <a href="<?php echo home_url();?>"> //Go to Homepage</a>
        </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>