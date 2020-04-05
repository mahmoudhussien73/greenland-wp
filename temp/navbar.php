
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="left-links">
                  <span><i class="greenland green-phone"></i> +966536456787</span>
                  <span><i class="greenland green-location"></i>ADDRESS</span>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
                 <div class="right-links">
                  <div class="social">
                       <a href="#">
                        <i class="greenland green-facebook" data-toggle="tooltip" data-placement="top" title="FACEBOOK"></i>
                      </a>
                      <a href="#">
                        <i class="greenland green-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i>
                      </a>
                      <a href="#">
                        <i class="greenland green-youtube" data-toggle="tooltip" data-placement="top"  title="youtube"></i>
                      </a>
                      <a href="#">
                        <i class="greenland green-whatsapp" data-toggle="tooltip" data-placement="top" title="WHTSAPP"></i>
                      </a>
                  </div>
                  <div class="lang">
                    <a class="searchIcon">
                       <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/spotify.svg#icon-search"></use>
                      </svg>
                      </a>
                    <?php if($_SESSION['lang'] == 'english'){
                              echo '<a href="?lang=ar" data-toggle="tooltip" data-placement="top" title="اللغه العربيه" class="right">عربي</a>';
                          }else if($_SESSION['lang'] == 'arabic'){
                              echo '<a href="?lang=en" data-toggle="tooltip" data-placement="top" title="English Language" class="right">English</a>';
                    } ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!--End Upper bar-->
   <!--Start NavBar-->
   <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
          <?php if(is_front_page()){ ?>
                    

           <a class="navbar-brand" data-toggle="tooltip" data-placement="top" title="مصنع جرين لاند فاكتوري" href="<?php echo site_url('/home'); ?>">
               <span>
                   <svg class="svglogo">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/spotify.svg#logo"></use>
                  </svg>
               </span>
           </a>
           <?php }else{ ?>
           <a class="navbarbrand" data-toggle="tooltip" data-placement="top" title="مصنع جرين لاند فاكتوري" href="<?php echo site_url('/'); ?>">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/humicgreen.png" alt="logo" class="logo img-fluid" />
           </a>
            <?php } ?>
           <button class="navbar-toggler burger" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <div class="line-1"></div>
                  <div class="line-2"></div>
                  <div class="line-3"></div>
           </button>
          

            <?php
              wp_nav_menu(array(
                'theme_location'  => 'greenland_main_menu',
                 'depth'             => 3,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'main-nav',
                  'menu_class'        => 'nav navbar-nav ml-auto',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
              ));
            ?>
       </div>
   </nav>
   <!--End NavBar-->