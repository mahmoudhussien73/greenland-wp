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
   <hr>
</div>
  
<?php endwhile; ?>
  <div class="container">
   
    <?php
      $relatedhumics = get_field('related_humic');

      if($relatedhumics){ ?>

          <h2 class="headline_green">See Related Products</h2>
           <div class="row">
          <?php foreach($relatedhumics as $humic){ ?>
          <div class="col-md-4">
                 <div class="card">
                       <a href="<?php echo get_permalink($humic); ?>"><?php echo get_the_post_thumbnail($humic); ?></a>
                      <div class="card-body">
                          <h5 class="card-title"><a href="<?php echo get_permalink($humic); ?>"><?php echo get_the_title($humic); ?></a></h5>
                          <p class="card-text"><?php echo wp_trim_words( get_the_content($humic), 20 ); ?></p>

                      </div>
                  </div>
             </div>
       <?php } /*end foreach*/
     
      } /*endif*/ ?>

       <?php
      $relatedPesticide = get_field('related_pesticidse');

      if($relatedPesticide){ ?>

          <?php foreach($relatedPesticide as $pesticide){ ?>
          <div class="col-md-4">
                 <div class="card">
                       <a href="<?php echo get_permalink($pesticide); ?>"><?php echo get_the_post_thumbnail($pesticide); ?></a>
                      <div class="card-body">
                          <h5 class="card-title"><a href="<?php echo get_permalink($pesticide); ?>"><?php echo get_the_title($pesticide); ?></a></h5>
                          <p class="card-text"><?php echo wp_trim_words( get_the_content($pesticide), 20 ); ?></p>
                      </div>
                  </div>
             </div>
              </div>
       <?php } /*end foreach*/
     
      }/*end if*/ ?>
     
    </div>

<?php get_footer(); ?>