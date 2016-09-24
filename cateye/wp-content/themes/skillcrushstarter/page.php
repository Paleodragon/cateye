<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="entry-title"><?php the_title(); ?> Me!</h2>
			<article class="post-entry">
                <div class="entry-summary">
				<?php the_content(); ?>
                </div>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
