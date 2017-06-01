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
        <!--<h2>Development:</h2>-->
    <?php while ( have_posts() ) : the_post();
    $image_1 = get_field("image_1");
    $image_2 = get_field("image_2");
    $image_3 = get_field("image_3");
    $image_4 = get_field("image_4");
    $image_5 = get_field("image_5");
    $image_6 = get_field("image_6");
    $image_7 = get_field("image_7");
    $image_8 = get_field("image_8");
    $image_9 = get_field("image_9");
    $image_10 = get_field("image_10");
    $image_11 = get_field("image_11");
    $size = "large";
    $description_1 = get_field("description_1");
    $description_2 = get_field("description_2");
    $description_3 = get_field("description_3");
    $description_4 = get_field("description_4");
    $description_5 = get_field("description_5");
    $description_6 = get_field("description_6");
    $description_7 = get_field("description_7");
    $description_8 = get_field("description_8");
    $description_9 = get_field("description_9");
    $description_10 = get_field("description_10");
    $description_11 = get_field("description_11");
    ?>
<section class="portfolio-wrapper">
<div class="portfolio-content">
    <h2>Development:</h2>
    <div class="site-left">
      <div class="image-left">
        <figure><a href="http://accelerateit.wpengine.com/"><?php echo wp_get_attachment_image($image_1, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_1", 47331) ?></h2>
        <p><?php the_field("description_1", 47331) ?></p>
      </div>
    </div>

    <div class="site-right">
      <div class="image-right">
        <figure><a href="https://codepen.io/Paleodragon/full/vmrNbG/"><?php echo wp_get_attachment_image($image_2, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_2", 47331) ?></h2>
        <p><?php the_field("description_2", 47331) ?></p>
      </div>
    </div>
<!--</div>-->

<!--<div class="portfolio-content">-->
    <div class="site-left">
      <div class="image-left">
        <figure><a href="https://codepen.io/Paleodragon/full/RVaKWJ/"><?php echo wp_get_attachment_image($image_3, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_3", 47331) ?></h2>
        <p><?php the_field("description_3", 47331) ?></p>
      </div>
    </div>

    <div class="site-right">
      <div class="image-right">
        <figure><a href="https://codepen.io/Paleodragon/full/QvQvbG/"><?php echo wp_get_attachment_image($image_4, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_4", 47331) ?></h2>
        <p><?php the_field("description_4", 47331) ?></p>
      </div>
    </div>
    <div class="site-left">
      <div class="image-left">
        <figure><a href="http://localhost:38721/wp-content/uploads/2017/06/accelerate404.png"><?php echo wp_get_attachment_image($image_5, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_5", 47331) ?></h2>
        <p><?php the_field("description_5", 47331) ?></p>
      </div>
        </div>
    <!--</div>-->

    <div class="site-right">
      <div class="image-right">
        <figure><a href="https://github.com/Paleodragon/Skyscraper"><?php echo wp_get_attachment_image($image_6, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_6", 47331) ?></h2>
        <p><?php the_field("description_6", 47331) ?></p>
      </div>
    </div>

    <div class="site-center">
      <div class="image-center">
        <figure><?php echo wp_get_attachment_image($image_7, $size); ?></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_7", 47331) ?></h2>
        <p><?php the_field("description_7", 47331) ?></p>
      </div>   
    </div>

    <h2>Writing:</h2>
    <div class="site-left">
      <div class="image-left">
        <figure><a href="http://evengreenbootsleavetrails.blogspot.com/"><?php echo wp_get_attachment_image($image_8, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_8", 47331) ?></h2>
        <p><?php the_field("description_8", 47331) ?></p>
      </div>
    </div>

    <div class="site-right">
      <div class="image-right">
        <figure><a href="http://undiscoveredtomes.blogspot.com/"><?php echo wp_get_attachment_image($image_9, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_9", 47331) ?></h2>
        <p><?php the_field("description_9", 47331) ?></p>
      </div>
    </div>
    <div class="site-left">
      <div class="image-left">
        <figure><a href="https://www.amazon.com/Santas-Letter-Holidays-Beyond-Veil-ebook/dp/B00H9TEJV6/ref=asap_bc?ie=UTF8"><?php echo wp_get_attachment_image($image_10, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_10", 47331) ?></h2>
        <p><?php the_field("description_10", 47331) ?></p>
      </div>
    </div>

    <div class="site-right">
      <div class="image-right">
        <figure><a href="https://www.amazon.com/Carons-Holidays-Beyond-Veil-Book-ebook/dp/B00J1LZDAG/ref=asap_bc?ie=UTF8"><?php echo wp_get_attachment_image($image_11, $size); ?></a></figure>
      </div>
      <div class="description">
        <h2><?php the_field("site_11", 47331) ?></h2>
        <p><?php the_field("description_11", 47331) ?></p>
      </div>
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
