<?php
/**
 * The template for displaying pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
get_header();
if(have_posts()) :
      while (have_posts()) : the_post();
        dynamicPageBanner();
?>



<div class="container">
    <div class="row">
          <div class="col">
            <?php the_content(); ?>
          </div>
    </div>
</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>