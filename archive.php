<?php
/**
 * The template for displaying archive.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
get_header();

dynamicPageBanner(array(
    'title' => get_the_archive_title(),
    'subtitle'  => get_the_archive_description()
));

?>

<div class="container">
  
<?php
    
      while (have_posts()) : the_post(); ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="row align-items-center">
                <div class="col-md-8">
                  <?php the_content(); ?>
                </div>
                <div class="col-md-4">
                  <?php the_post_thumbnail('greenland-products', array('class' => 'img-fluid')); ?>
                </div>
                <a class="btn btn-green" href="<?php the_permalink(); ?>">Read more</a>
          </div>
          <hr>
<?php endwhile;
  echo paginate_links();

?>

</div>
<?php get_footer(); ?>