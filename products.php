<?php
/**
 * Template Name: products
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
 get_header();

 dynamicPageBanner();
?>


 

<div class="product">

  <div class="container">
      <ul class="list-unstyled">
           <li data-class=".all" class="active">الكل</li>
           <li data-class="humic">هيوميك اسيد</li>
           <li data-class="beans">بذور</li>
           <li data-class="pesticide">مبيدات  </li>
      </ul>
      <div class="shoufel">

          <div class="row">
               <div class="col-md-4">
                   <div class="card">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/01.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">كيف يعمل الهيوميك اسيد</h5>
                            <div class="card-text">بأضافة الكمية المناسبة من الهيوميك آسيد للتربة فانه يساعد على ربط الكاتيونات (العناصر المشحونة ايجابيا)ويرفع قدرة النبات على امتصاص المعادن النادرة ذات القيمة العالية للنبات , كما ان مكوناته تعمل على الالتصاق بذرات الماغنسيوم والكالسيوم والحديد وغيرها من المعادن التى تفيد النبات وتكمن احد اهم خصاائص الهيوميك آسيد في حبس السموم ومنعها من الوصول الى الجزور</div>

                        </div>
                    </div>
               </div>
         </div>
      </div>

  </div>
</div>


<?php get_footer(); ?>