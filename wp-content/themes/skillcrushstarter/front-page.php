<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
        <div id="image" style="width: 425px">
            .
        </div>
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
            <div class="social-btns">
					<a href="https://twitter.com/CatEyeCoding" class="soc-icon tw"></a>
					<a href="https://www.facebook.com/rebecca.w.foster.9" class="soc-icon fb"></a>
					<a href="https://www.linkedin.com/in/rebecca-w-foster" class="soc-icon ln"></a>
            </div>
				<a href="<?php echo site_url('/portfolio/'); ?>" class="btn">View My Portfolio</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>