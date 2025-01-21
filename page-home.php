<?php get_header();/*Template Name:Home Page*/?>

<div class="herobanner">
        <div class="work-item__video">
          <video data-keepplaying autoplay muted loop playsinline
            class="videofull lazy" width="1920" height="814">
            <source data-src="<?php the_field('banner_video'); ?>"
              type="video/mp4" />
          </video>
          <div class="banner-wrap centerposition w-100">
            <div
              class="investtext fs-65w text-white plus-font mb-2 fw-100 lh-1">
              <?php the_field('banner_upper_heading'); ?>
            </div>
            <h1
              class="fs-100w text-white plus-font lh-1 fw-400 ">
              <?php the_field('banner_heading'); ?>
            </h1>
            <div class="btn-wrap mt-30">
              <a href="<?php the_field('banner_button_url'); ?>"
                class="btn btn-nav-outline plus-font">
                <?php the_field('banner_button_text'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--portfolio carousel-->
      <!-- <section class="portfolio-sec py-3 bg-grey">
        <div class="container">
          <div class="row g-3 align-items-center">
            <div class="col col-20-lg">
              <div class="fs-40w fw-bold mb-3 lh-1"><?php the_field('portfolio_text_banner_area'); ?></div>
             <a href="<?php the_field('view_all_url_in_portfolio'); ?>"
                class="v-ewall fs-16w fw-bold text-decoration-underline d-inline-flex gap-2 align-items-center">
                <?php the_field('view_all_text_in_portfolio'); ?>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-right.svg"
                  class="img-fluid" alt="icon" width="10" height="10"></a> 
            </div>
               <div class="col-lg-3 col-md-6">
              <p class="mb-0 fs-20w fw-300">
                <?php the_field('portfolio_description_in_banner'); ?>
              </p>
            </div> 
            <div class="col-lg-fit col-md-12">
              <div class="slick-fourport ps-lg-12 pe-lg-12">

              
                <div class="slickportfolio">
                <?php
                    if( have_rows('portfolio_slider_banner') ):
                
                     while ( have_rows('portfolio_slider_banner') ) : the_row();?>
                
                <div>
                    <div class="portimg d-flex justify-content-center align-items-center">
                      <img data-src="<?php the_sub_field('portfolio_slider_image'); ?>"
                        alt="" width="180" height="99"
                        class="img-fluid lazyload">
                    </div>
                  </div>

                  <?php endwhile;endif;wp_reset_query();?>

     


                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section class="portfolio-sec py-3 bg-grey">
        <div class="container">
          <div class="row g-3 align-items-center">
            <div class="col col-20-lg">
              <div class="fs-40w fw-bold lh-1"><?php the_field('portfolio_text_banner_area'); ?></div>
              <!-- <a href="<?php the_field('view_all_url_in_portfolio'); ?>"
                class="v-ewall fs-16w fw-bold text-decoration-underline d-inline-flex gap-2 align-items-center">
                <?php the_field('view_all_text_in_portfolio'); ?>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-right.svg"
                  class="img-fluid" alt="icon" width="10" height="10"></a> -->
            </div>
               <!--<div class="col-lg-3 col-md-6">
              <p class="mb-0 fs-20w fw-300">
                <?php the_field('portfolio_description_in_banner'); ?>
              </p>
            </div> -->
            <div class="col-lg-7 col-lg-fit">
              <div class="slick-fourport ps-lg-12 pe-lg-12">

                <div class="slickportfolio">
                <?php
                    if( have_rows('portfolio_slider_banner') ):
                
                     while ( have_rows('portfolio_slider_banner') ) : the_row();?>
                
                <div>
                    <div class="portimg d-flex justify-content-center align-items-center">
                      <img data-src="<?php the_sub_field('portfolio_slider_image'); ?>"
                        alt="portfolio_slider_image" width="180" height="99"
                        class="img-fluid lazyload">
                    </div>
                  </div>

                  <?php endwhile;endif;wp_reset_query();?>


                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="stakeboat-capital spacing-pt-2 plus-font">
        <div class="container">
          <div class="row g-3">
            <div class="col-lg-12">
              <div class="pe-lg-4">
                
<!--                 <div class="no-wrap-balance fw-bold plus-font fs-50w lh-2">
                      <?php the_field('after_banner_heading_text'); ?>
                </div> -->
                <!-- <div class="mt-lg-5 mt-3">
                  <a href="<?php the_field('after_banner_learn_more_button_url'); ?>"
                    class="btn btn-primary plus-font"><?php the_field('after_banner_learn_more_button_text'); ?></a>
                </div> -->
              
              </div>

                      <br>
        
                      
                      <?php the_field('after_banner_side_upper_text'); ?>
        
                      <?php the_field('after_banner_side_lower_text'); ?>
              
                      
            </div>

              <!-- <div class="capital-right">
                      
              <?php the_field('after_banner_side_upper_text'); ?>

              <?php the_field('after_banner_side_lower_text'); ?>
              </div> -->
         
          </div>
        </div>
      </section>


  <!-- t.journey starts here -->
      <section class="spacing-pb-3 plus-font">
        <div class="container">
          <div class="fd-heading mb-lg-4 mb-3">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="fs-50w fw-bold plus-font mb-lg-3 mb-3"><?php the_field('transformative_journeys_heading'); ?></div>
                <p class="fs-30w plus-font fw-300">

                <?php the_field('transformative_journeys_description'); ?>

                </p>
              </div>

              <!-- <div class="col-md-6">
                <div class="text-md-end">
                  <a href="<?php the_field('transformative_journeys_view_all_button_url'); ?>"
                    class="v-ewall fs-20w fw-bold text-decoration-underline d-inline-flex gap-2 align-items-center"><?php the_field('transformative_journeys_view_all_button_text'); ?>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-right.svg"
                      class="img-fluid" alt="icon" width="14" height="14"></a>
                </div>
              </div> -->


            </div>
          </div>

          <div class="success-foliomain overflow-hidden">
            <div class="folio-carousel">

            <?php
                if( have_rows('transformative_slider_wrapper') ):
                                  
                 while ( have_rows('transformative_slider_wrapper') ) : the_row();
                 
                   // Generate a unique modal ID for each slider item
                $modal_id = 'popModalSucces' . get_row_index();
                 
                 ?>

                <div>
                <div class="folioitems position-relative">
                  <div class="folioimg position-relative">
                    <img data-src="<?php the_sub_field('slider_background_image'); ?>" alt="Slick"
                      class="img-fluid w-100 h-100 lazyload" width="1672"
                      height="570">
                    <div class="foliocontent-items">
                      <div class="insidefolioimg mb-2">
                        <img data-src="<?php the_sub_field('slider_image'); ?>" alt="Slick"
                          class="img-fluid lazyload" width="250" height="179">
                      </div>
                      <p
                        class="plus-font fw-300 fs-30w mb-lg-4 mb-3"><?php the_sub_field('slider_description'); ?></p>
                      <div class="text-start">
                        <a href="<?php the_sub_field('slider_button_url'); ?>" data-bs-toggle="modal" data-bs-target="#<?php echo $modal_id; ?>" 
                          class="v-ewall fs-20w fw-bold text-decoration-underline d-inline-flex gap-2 align-items-center"> <?php the_sub_field('slider_button_text'); ?><img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-right.svg"
                            class="img-fluid" alt="icon" width="14"
                            height="14"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile;endif;wp_reset_query();?>





            </div>
            <div class="navigation-folio">
              <div class="leftarrow-lf ">
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-left.svg" width="20"
                  height="20" alt="arrow" class="img-fluid widthiconarrow">
              </div>
              <div class="Slick-Navigation"></div>
              <div class="rightarrow-lf">
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-right.svg" width="20"
                  height="20" alt="arrow" class="img-fluid widthiconarrow">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- t.journey ends here -->


      <section class="approach-section-main plus-font hide_temp">
        <div class="row g-0 ">
          <div class="col-lg-6 order-lg-1 order-2">
            <div class="approach-section h-100 pe-lg-5">
              <div class="fs-50w fw-bold mb-3 lh-1"><?php the_field('approach_title'); ?></div>
             
              <?php the_field('approach_description'); ?>


              <p class="fw-500 fs-25w"><?php the_field('approach_short_description'); ?></p>
              <div class="mt-lg-5 mt-3">
                <a href="<?php the_field('learn_more_button_url_in_approach'); ?>"
                  class="btn btn-primary plus-font"><?php the_field('learn_more_button_text_in_approach'); ?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 order-1">
            <div class="approachimg h-100">
              <img data-src="<?php the_field('approach_right_image'); ?>" alt="home"
                height="800" width="844" class="img-fluid w-100 h-100 lazyload">
            </div>
          </div>
        </div>
      </section>
      <section class="stakeboat-capital spacing-pb-3 spacing-pt-3 plus-font">
        <div class="container">
          <div class="row g-3">
            <div class="col-lg-6">
              <div
                class=" h-100 pe-lg-5 d-flex flex-column justify-content-center">
                <div class="fs-50w fw-bold mb-3 lh-1"><?php the_field('who_we_are_heading_in_home_page'); ?></div>
                
                      <?php the_field('who_we_are_description_in_home_page'); ?>

                <p class="fw-500 fs-25w"><?php the_field('who_we_are_short_description_in_home_page'); ?></p>
                <div class="mt-lg-5 mt-3">
                  <a href="<?php the_field('who_we_are_button_url_in_home_page'); ?>"
                    class="btn btn-primary plus-font"><?php the_field('who_we_are_button_text_in_home_page'); ?></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="whowrareounts h-100 position-relative">
                <div class="stripebg">
                  <img data-src="<?php the_field('who_we_are_right_mask_image'); ?>" alt="mask"
                    width="944" height="600"
                    class="img-fluid lazyload w-100 h-100">
                </div>


                <div class="countslist">

                <div class="row align-items-center">
                    <div class="col-lg-7">
                      <div
                        class="countin fw-bolder plus-font fs-90w primary-color"><span class="counter">150</span>+</div>
                    </div>
                    <div class="col-lg-5">
                      <div
                        class="fs-30w  plus-font fw-400 lh-2 pe-lg-4">Man-years
                        of Experience</div>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-lg-7">
                      <div
                        class="countin fw-bolder plus-font fs-90w primary-color"><span class="counter">100</span>+</div>
                    </div>
                    <div class="col-lg-5">
                      <div class="fs-30w  plus-font fw-400 lh-2 pe-lg-4">Number
                        of Investments</div>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-lg-7">
                      <div
                        class="countin fw-bolder plus-font fs-90w primary-color">$<span class="counter">8</span>+Bn</div>
                    </div>
                    <div class="col-lg-5">
                      <div class="fs-30w  plus-font fw-400 lh-2 pe-lg-4">Value<br>
                        Created</div>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-lg-7">
                      <div
                        class="countin fw-bolder plus-font fs-90w primary-color"><span class="counter">30</span>k+</div>
                    </div>
                    <div class="col-lg-5">
                      <div class="fs-30w  plus-font fw-400 lh-2 pe-lg-4">Jobs<br>
                        Generated</div>
                    </div>
                  </div>         

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
   

      <!-- <section class="author-section spacing-pb-3">
        <div class="author-secmain">
          <div class="row g-0">
            <div class="col flex-60">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/7.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Chandrasekar Kandasamy</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Managing Partner</p>
                      </div>
                    </a>
                </div>
                <div class="col-md-8 position-relative">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                        <img data-src="<?php echo $asset_path; ?>assets/images/author/9.png"
                          alt="Profile" class="img-fluid lazyload w-100">
                          <div class="portfolio-info">
                            <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Srinivas Baratam</h4>
                            <p class="mb-0 fs-20w fw-400 text-white">Managing Director</p>
                          </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                        <img data-src="<?php echo $asset_path; ?>assets/images/author/6.png"
                          alt="Profile" class="img-fluid lazyload w-100">
                          <div class="portfolio-info">
                            <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Girish Patil</h4>
                            <p class="mb-0 fs-20w fw-400 text-white">Girish Patil</p>
                          </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                      <div class="box-items-wrapprofile bg-white w-100">
                        <div class="fw-bold fs-50w mb-lg-4 mb-3 lh-2">Meet the Team</div>
                        <div class="btn-wrap">
                          <a href="#" class="btn btn-primary">KNOW MORE</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="row g-0 align-items-end">
                <div class="col-md-4">
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/8-1.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Krishanu Sinha</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Vice President</p>
                      </div>
                    </a>

                </div>
                <div class="col-md-4">
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/3.png"
                      alt="Profile" class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Lohitash Sirsikar </h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Vice President</p>
                      </div>
                    </a>
                </div>
                <div class="col-md-4">
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/3-1.png" alt="Profile"
                      class="img-fluid lazyloaded"
                      src="<?php echo $asset_path; ?>assets/images/author/3-1.png">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Shashank Jain</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Senior Associate</p>
                      </div>
                    </a>
                </div>

              </div>
            </div>
            <div class="col flex-40">
              <div class="row g-0">
                <div class="col-md-6">
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/10-1.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Deepti Malik</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Managing Director</p>
                      </div>
                    </a>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/8.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Rohan Paliwal</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Associate</p>
                      </div>
                    </a>
                </div>
                <div class="col-md-6">
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/4.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2"> Kumaran Chandrasekaran</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Managing Director</p>
                      </div>
                    </a>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#popModal"  class="user-de d-flex">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/10.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                      <div class="portfolio-info">
                        <h4 class="fw-bold text-white fs-30w lh-1 mb-2">Kishan Ballal</h4>
                        <p class="mb-0 fs-20w fw-400 text-white">Associate</p>
                      </div>
                    </a>
                </div>
                </div>
               
            </div> -->
            <!-- <div class="col-lg-6">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="user-de">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/7.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                  </div>
                </div>
                <div class="col-md-8 position-relative">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <div class="user-de">
                        <img data-src="<?php echo $asset_path; ?>assets/images/author/5.png"
                          alt="Profile" class="img-fluid lazyload w-100">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="user-de">
                        <img data-src="<?php echo $asset_path; ?>assets/images/author/6.png"
                          alt="Profile" class="img-fluid lazyload w-100">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="box-items-wrapprofile bg-white w-100">
                        <div class="fw-bold fs-50w mb-lg-4 mb-3 lh-2">Meet The
                          Minds Behind Our Success</div>
                        <div class="btn-wrap">
                          <a href="#" class="btn btn-primary">MEET THE TEAM</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="row g-0 align-items-end">
                <div class="col-md-4">
                  <div class="user-de">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/8.png" alt="Profile"
                      class="img-fluid lazyload w-100">
                  </div>

                </div>
                <div class="col-md-4">
                  <div class="user-de">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/3.png"
                      alt="Profile" class="img-fluid lazyload w-100">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="user-de">
                    <img data-src="<?php echo $asset_path; ?>assets/images/author/4.png" alt="Profile"
                      class="img-fluid lazyloaded"
                      src="<?php echo $asset_path; ?>assets/images/author/4.png">
                  </div>
                </div>

              </div>
            </div> -->
          <!-- </div>
        </div>
      </section> -->

      <!-- <section class="spacing-pb-3 plus-font">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-5">
              <div class="sustainabilty-left h-100 position-relative">
                <div class="position-absolute w-100 h-100">
                  <img data-src="<?php echo $asset_path; ?>assets/images/MaskGroup22.png" width="100%"
                    height="100%" alt="mask"
                    class="img-fluid lazyload w-100 h-100">
                </div>
                <div class="sustheadbox">
                  <div
                    class="fw-bold plus-font fs-50w lh-1">Sustainability</div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="sustainabilty-right h-100 position-relative">
                <div class="sustheadbox">
                  <p class="fs-30w fw-400 plus-font">Our commitment to
                    environmental, social, governance, and value (ESG & V)
                    drives our responsible investment practices. Learn more
                    about our ESG initiatives.</p>
                  <div class="mt-lg-5 mt-3">
                    <a href="#"
                      class="btn btn-primary plus-font">LEARN MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <section class="spacing-pb-3 plus-font">
        <div class="container">
          <div class="sustainabilty position-relative">
            <!-- <div class="position-relative"> -->
              <!-- <img data-src="<?php echo $asset_path; ?>assets/images/MaskGroup110.png" alt="Slick"
                class="img-fluid w-100 h-100 lazyload d-lg-block d-none" width="1672"
                height="575"> -->
                <div class="work-item__video work_item_mobile">
                <video data-keepplaying autoplay muted loop playsinline
            class="videofull lazy" width="1672" height="575">
            <source data-src="<?php echo bloginfo('template_directory');?>/assets/video/sustainability.mp4"
              type="video/mp4"/>
          </video>
          </div>
              <div class="sustainabilty-items text-lg-white pt-lg-0 pt-3">
                <div class="fs-50w fw-bold mb-2"><?php the_field('sustainability_title'); ?></div>
                <p class="fs-30w fw-400 ">
                  <?php the_field('sustainability_description'); ?>
                </p>
                <div class="mt-lg-5 mt-3">
                  <a href="<?php the_field('sustainability_button_url'); ?>"
                  class="btn btn-nav-outline" >
                  <?php the_field('sustainability_button_text'); ?>
                </a>
                </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </section>

      <section class="spacing-pb-3 plus-font hide_temp">
        <div class="container">
          <div class="fd-heading mb-lg-4 mb-3">
            <div class="row align-items-center">
              <div class="col-md-8">
                <div class="fs-50w fw-bold plus-font mb-lg-3 mb-3">News & Updates</div>
                <p class="fs-30w plus-font fw-300">Stay updated with the latest news and developments at Stakeboat Capital.</p>
              </div>
              <div class="col-md-4">
                <div class="text-md-end">
                  <a href="<?php the_field('news_view_all_button_url_in_homepage'); ?>"
                    class="btn btn-primary">VIEW ALL</a>
                </div>
              </div>
            </div>
          </div>

          <div class="gridview-list">
            <div class="row g-3">
              <div class="col-lg-6">
                <div class="scalp-mint row-gap-3 pt-lg-5 pb-lg-4 pe-lg-5 ps-lg-5 p-3 bg-primary  d-flex justify-content-between flex-column">
                   <div class="text-white fs-30w fw-400">Sankalp Semiconductor raises $5 million from Stakeboat Capital</div>
                   <a href="#" class="livemibt-sect d-flex justify-content-between">
                    <div class="livemintext fw-300 fs-25w text-white">Live mint</div>
                    <div class="arrow-whitetransform">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g transform="matrix(-1,-1.2246467991473532e-16,1.2246467991473532e-16,-1,20,20)"><path d="M20 9H3.8l5.6-5.6L8 2l-8 8 8 8 1.4-1.4L3.8 11H20z" fill="#ffffff" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                    </div>
                   </a>
                </div>
                <div class="scalp-images">
                  <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/MaskGroup23.png" alt="mask" width="100%" height="100%" class="img-fluid w-100 h-100 lazyload">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row g-3 h-100 colbox-height-news">
                  <div class="col-md-6">
                    <div class="storybox-wrap p-lg-4 p-3 h-100 bg-secondary d-flex justify-content-between flex-column row-gap-3">
                      <div class="fs-25w fw-400">Sankalp Malaysia to act as a gateway for business expansion in Southeast Asia</div>
                      <a href="#" class="livemibt-sect d-flex justify-content-between">
                       <div class="livemintext fs-20w text-blue">Design Reuse</div>
                       <div class="arrow-whitetransform">
                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g transform="matrix(-1,-1.2246467991473532e-16,1.2246467991473532e-16,-1,20,20)"><path d="M20 9H3.8l5.6-5.6L8 2l-8 8 8 8 1.4-1.4L3.8 11H20z" fill="#A13178" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                       </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="storybox-wrap p-lg-4 p-3 h-100 bg-secondary d-flex justify-content-between flex-column row-gap-3">
                      <div class="fs-25w fw-400">Dvara KGFS raises ₹97 crore Non-banking finance company Dvara KGFS...</div>
                      <a href="#" class="livemibt-sect d-flex justify-content-between">
                       <div class="livemintext fs-20w text-blue">Business Line</div>
                       <div class="arrow-whitetransform">
                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g transform="matrix(-1,-1.2246467991473532e-16,1.2246467991473532e-16,-1,20,20)"><path d="M20 9H3.8l5.6-5.6L8 2l-8 8 8 8 1.4-1.4L3.8 11H20z" fill="#A13178" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                       </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="storybox-wrap p-lg-4 p-3 h-100 bg-secondary d-flex justify-content-between flex-column row-gap-3">
                      <div class="fs-25w fw-400">SaaS startup LeadSquared raises $3M in Series A funding from Stakeboat Capital for global expansion</div>
                      <a href="#" class="livemibt-sect d-flex justify-content-between">
                       <div class="livemintext fs-20w text-blue">Your Story</div>
                       <div class="arrow-whitetransform">
                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g transform="matrix(-1,-1.2246467991473532e-16,1.2246467991473532e-16,-1,20,20)"><path d="M20 9H3.8l5.6-5.6L8 2l-8 8 8 8 1.4-1.4L3.8 11H20z" fill="#A13178" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                       </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="storybox-wrap p-lg-4 p-3 h-100 bg-secondary d-flex justify-content-between flex-column row-gap-3">
                      <div class="fs-25w fw-400">Stakeboat Capital Plans IT Services Platform, Places First Bet</div>
                      <a href="#" class="livemibt-sect d-flex justify-content-between">
                       <div class="livemintext fs-20w text-blue">Vccircle</div>
                       <div class="arrow-whitetransform">
                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g transform="matrix(-1,-1.2246467991473532e-16,1.2246467991473532e-16,-1,20,20)"><path d="M20 9H3.8l5.6-5.6L8 2l-8 8 8 8 1.4-1.4L3.8 11H20z" fill="#A13178" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                       </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>


      <!--footer-->
  <?php
 
get_footer();
?>
    </div>


       <!-- Modal -->
       <?php
          if ( have_rows('transformative_slider_wrapper') ):
                while ( have_rows('transformative_slider_wrapper') ) : the_row();
                    // Generate a unique modal ID for each item
          $modal_id = 'popModalSucces' . get_row_index();
?>

<div class="modal fade modal-xl" id="<?php echo $modal_id; ?>" tabindex="-1" aria-labelledby="<?php echo $modal_id; ?>" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-body">
            <a href="javascript:;"  class="d-flex justify-content-end" data-bs-dismiss="modal" aria-label="Close">
              <img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/close.png" alt="close" width="40" height="40" class="img-fluid closeiconmodal">
            </a>

            <div class="body-content-wrapmodal pt-3 ps-lg-4 pe-lg-4 pb-lg-4 ">
               <div class="row g-lg-5 g-3">
                <div class="col-md-3">
                  <div class="prfile-modal">
                    <img data-src="<?php the_sub_field('modal_image'); ?>" alt="Slick"
                    class="img-fluid lazyload" width="250" height="179">
                  </div>
                </div>
                <div class="col-md-8">               


                <div class="body-wrap-para fw-400 ">

                <?php the_sub_field('modal_description'); ?>
                



                <div class="text-start">
                  <a href="<?php the_sub_field('modal_view_the_entire_story_link'); ?>"
                    class="v-ewall fs-16w fw-bold text-decoration-underline d-inline-flex gap-2 align-items-center">UNLOCK MORE<img src="<?php echo bloginfo('template_directory');?>/assets/images/icons/arrow-right.svg"
                      class="img-fluid" alt="icon" width="12" height="12"></a>
                </div>
                

              </div>
                </div>
               </div>

        


            </div>

       
          
          </div>
         




        </div>
      </div>
    </div>
  


    <?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer();?>  