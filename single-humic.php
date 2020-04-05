<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
get_header();

      while (have_posts()) : the_post();
        dynamicPageBanner();
?>




<div class="container">
    <div class="row">
          <div class="col">
            <?php the_post_thumbnail('greenland-products', array('class' => 'img-fluid')); ?>
          </div>
           <div class="col">
            <?php the_content(); ?>
          </div>
    </div>
</div>

<?php endwhile; ?>
<div class="container">
  <?php
      $relatedProduct = new WP_Query(array(
        'post_type'   => 'bean',
        'meta_query'  => array(
          array(
            'key'     => 'related_humic',
            'compare' => 'LIKE',
            'value'   => '"' .get_the_ID().'"'
          )
        )

      ));

      if($relatedProduct->have_posts()):
          echo '<hr>';
          echo ' <h2 class="headline_green">See Related Products</h2>';
          while($relatedProduct->have_posts()):
              $relatedProduct->the_post();
        
      ?>
              <div class="row">
                <div class="col-md-4">
                   <div class="card">
                         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php the_content(); ?></p>

                        </div>
                    </div>
                </div>
               </div>
  <?php endwhile; endif; ?>
   <?php wp_reset_postdata(); ?>
  
</div>

<?php get_footer(); ?>