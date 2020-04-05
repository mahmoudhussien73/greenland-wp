<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
get_header(); 

dynamicPageBanner(array(
    'title' => 'our blog',
    'subtitle'  => 'keep in toutch'
));
?>
 
<div class="container">
  
<?php
    if(have_posts()) :
      while (have_posts()) : the_post(); ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="row align-items-center">
                <div class="col-md-8">
                  <?php the_content(); ?>
                </div>
                <div class="col-md-4">
                  <?php the_post_thumbnail('greenland-products', array('class' => 'img-fluid')); ?>
                </div>
          </div>
          <hr>
<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>