<?php
/**
 * The template for displaying main home.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
get_header(); ?>
<!--Start Slider-->
<div class="slider">
             <div id="main-slider" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
              <div class="carousel-item  active">
                   <div class="overlay"></div>
                    <video autoplay="" muted="" loop="" id="myVideo">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/12.mp4" type="video/mp4">
                    </video>
                    <div class="text container">
                        <h2> شركة جرين لاند للأسمدة والمخصبات الزراعية </h2>
                        <p>اكبر شركة لصناعة واستيراد مستلزمات الزراعة</p>
                    </div>
                </div>
                <div class="carousel-item carousel-one">
                   <div class="overlay"></div>
                    <div class="text container">
                        <h2>شركة جرين لاند للأسمدة </h2>
                        <p>تعتمد الشركة في منتجات الاسمده والمخصبات الزراعيه على المنتجات العضوية</p>
                    </div>
                </div>
                <div class="carousel-item carousel-two">
                  <div class="overlay"></div>
                   <div class="text container fromright">
                        <h2>شركة جرين لاند للمبيدات</h2>
                        <p>يتوفر لدى الشركه المبيدات الزراعية الازمة لمكافحة امراض النبات والتربه</p>
                    </div>
                </div>
                <div class="carousel-item carousel-three">
                  <div class="overlay"></div>
                   <div class="text container">
                        <h2>شركة جرين لاند للبذور</h2>
                        <p>يتوفر لدى الشركه اجود انواع البذور المحلية والاوروبية ولديها وكالات من الشركات المصنعه</p>

                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
         </div>
        
       </div>
   <!--End Slider-->
   <!-- Start overview -->
   <div class="overview text-center">
        <div class="container">
            <h2 class="headline_green">عن الشركة</h2>
            <p>
    تم تأسيس شركة جرين لاند للاسمدة و المخصبات الزراعية  بشراكة مصرية سعودية – ، لتكون نموذجاً متميزاً ورائداً يحتذى به في الشرق الاوسط ،
     وذلك من أجل دعم الاقتصاد الوطني السعودي ومواكبة رؤية المملكة 2030 والتي تدعم القطاع الخاص  والمساهمة في تحقيق الأمن الغذائي، وتوظيف الكوادر المحلية، لتكون رمزاً تخلّد فيه مبادئه وقيمه السامية.
       إن ما حققته شركة جرين لاند سواءً على الصعيد المحلي أو الاقليمي، كان حلماً وأفكاراً ثم أصبح واقعاً ونموذجاً يشار إليه بالبنان،<br> وبينما نمضي في تطوير أعمالنا،
     سنحافظ دائماً على التزامنا بمسؤولياتنا الإجتماعية، كما إننا فخورون بسجل الشركة المتميز على الصعيد الإستراتيجي في إدارة التطوير المستدام ونمو الأعمال
    ، إلى جانب إنجازاتها في مجال التميز المؤسسي التشغيلي

           </p>
           <p>و منذ ان بدأت الشركة اعمالها وهي تهدف في اعمالها إلى عالم الزراعة و الاسمدة الحديثة وتطلع دائماً إلى التقدم و النمو.

           </p>
           <h4></h4>
           <!-- <button class="">View More</button> -->
        </div>
    </div>
    <!-- End overview -->
    <!--Start Humic acid -->
    <div class="humic-acid">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/Mined-In-North-America.jpg" alt="Humic-acid-minded">
                <div class="card-body">
                    <h5 class="card-title">ما هو الهيوميك آسيد</h5>
                    <p class="card-text">هو مركب عضوي طبيعي , يوجد في الطبيعة في المناطق الاحفورية ويتكون على مدار اللاف السنين , ولا  يوجد الا في المناطق البركانية وعلى بعد عشرات الامتار من سطح الارض, الأحماض الدبالية تعزز نمو النبات وخاصة إنتاج الكتلة الحيوية وخصوبة التربة. نظرًا لأن الأحماض الدبالية تتحلل تمامًا ، فإنها لا تدخل في منافسة غذائية مع نباتات المغذيات مثل النيتروجين. تظهر الدراسات العلمية الحالية أن خصوبة التربة تتحدد إلى حد كبير بمحتوى المادة الدبالية في المصفوفة</p>
                    
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/AccelerateRipeningHarvestEarlier.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">كيف يعمل الهيوميك اسيد</h5>
                    <p class="card-text">بأضافة الكمية المناسبة من الهيوميك آسيد للتربة فانه يساعد على ربط الكاتيونات (العناصر المشحونة ايجابيا)ويرفع قدرة النبات على امتصاص المعادن النادرة ذات القيمة العالية للنبات , كما ان مكوناته تعمل على الالتصاق بذرات الماغنسيوم والكالسيوم والحديد وغيرها من المعادن التى تفيد النبات وتكمن احد اهم خصاائص الهيوميك آسيد في حبس السموم ومنعها من الوصول الى الجزور</p>
                    
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/how-useful.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">كيف يفيد الهيوميك آسيد النباتات</h5>
                    <p class="card-text">يزيد الهيوميك آسيد من سهولة امتصاص المغذيات وتحمل الجفاف وانبات البذور مما يجعله محفزا ممتازاً للجذور , كما انه يزيد من توافر العناصر الغذائية في الاسمدة لدينا وتلك الموجودة بالفعل في التربة , يساعد ايضا على تهوية التربة من الداخل وخفض نسبة الحموضة في التربة وجعلها اكثر حيادية وسقوم بطرد الاملاح خارج منطقة الجذر</p>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Humic acid -->
    <!--ٍStart Chemistry -->
    <div class="Chemistry">
        <div class="container">
           <hr>
            <div class="row bord">
                <div class="col-md-6 col-sm-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Humic-Formula.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>
                        “Using our proprietary Wet Chemistry extraction process, we ACTIVATE the humic acid molecule making it more functional, enhancing its abilities: CEC, Buffering, Chelation, and Complexation. Whereas other methods of non-alkaline extraction do NOT activate those functional humic molecules, thus drastically reducing the benefits.”
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!--End Chemistry -->
   
  
   
    <!--Start Stats-->
    <div class="stats text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <i class="greenland green-happy"></i>
                        <h5>642</h5>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <i class="greenland green-accessibility"></i>
                        <h5>112</h5>
                        <p>amazing tours</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <i class="greenland green-stats-dots"></i>
                        <h5>595</h5>
                        <p>partners</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <i class="greenland green-bubbles4"></i>
                        <h5>09</h5>
                        <p>questions answered</p>
                    </div>
                </div>
            </div>
        </div>
    <!--End Stats-->
    <!--Start Choose us-->
        <div class="choose-us">
           <div class="container-fluid">
               <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/choose.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-6 text">
                    <h2>why to choose us</h2>
                    <p>We didn’t invent it but we always the best.</p>
                    <!-- <button class="button">read more</button> -->
                </div>
            </div>
        </div>
           </div>
    <!--End choose us-->
    <?php get_footer(); ?>