<?php
// If 404 page return 404 header
if(is_page('1578')):
    header("HTTP/1.0 404 Not Found");
endif;
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>