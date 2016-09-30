<?php
/**
 * The template for displaying the Portfolio page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="portfolio-page">
	<div class="site-content">
		<!--<?php while ( have_posts() ) : the_post(); ?>-->
			<div class='about-me-info'>
      <h3><?php the_content(); ?></h3>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="about-content">
    <?php while ( have_posts() ) : the_post();
    $image_1 = get_field("image_1");
    $image_2 = get_field("image_2");
    $image_3 = get_field("image_3");
    $image_4 = get_field("image_4");
    $image_5 = get_field("image_5");
    $image_6 = get_field("image_6");
    $size = "large";
    $description_1 = get_field("description_1");
    $description_2 = get_field("description_2");
    $description_3 = get_field("description_3");
    $description_4 = get_field("description_4");
    $description_5 = get_field("description_5");
    $description_6 = get_field("description_6");
    ?>
<section class="portfolio-wrapper">
<div class="portfolio-content">
    <div class="site-left">
      <div class="image-left">
        <figure><?php echo wp_get_attachment_image($image_1, $size); ?></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_1", 47331) ?></h2>
        <p><?php the_field("description_1", 47331) ?></p>
      </div>
    </div>

    <div class="site-right">
      <div class="image-right">
        <figure><?php echo wp_get_attachment_image($image_2, $size); ?></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_2", 47331) ?></h2>
        <p><?php the_field("description_2", 47331) ?></p>
      </div>
    </div>
</div>

<div class="portfolio-content">
    <div class="site-left">
      <div class="image-left">
        <figure><?php echo wp_get_attachment_image($image_3, $size); ?></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_3", 47331) ?></h2>
        <p><?php the_field("description_3", 47331) ?></p>
      </div>
    </div>

    <div class="site-right">
      <div class="image-right">
        <figure><?php echo wp_get_attachment_image($image_4, $size); ?></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_4", 47331) ?></h2>
        <p><?php the_field("description_4", 47331) ?></p>
      </div>
    </div>
</div>
    <div class="site-center">
      <div class="image-center">
        <figure><?php echo wp_get_attachment_image($image_5, $size); ?></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_5", 47331) ?></h2>
        <p><?php the_field("description_5", 47331) ?></p>
      </div>
    </div>
	</section>
<?php endwhile; // end of the loop. ?>
  </div>
  </div><!-- #content -->
    <div class="contact-section">
    <hr>
    <aside class="about-contact-us">
      <h2>See something that catches your interest?</h2>
    </aside>
    <div class="btn-contact-us">
      <button><a href="<?php echo site_url('/contact/'); ?>">Contact Me</a></button>

    </div>
  </div>
</div><!-- #primary -->

<?php get_footer(); ?>
