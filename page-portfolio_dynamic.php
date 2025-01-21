<?php get_header();?>



<div class="detail-herobanner position-relative">
        <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/portfolioi-banner.png" alt="home" height="800" width="100%"
          class="img-fluid w-100 h-100 lazyload">
        <div class="detail-herobanner-position">
          <h1 class="fs-65w text-md-white plus-font fw-600 detail-heroheading ">Empowering Businesses Together:
          </h1>
          <p class="fs-40w text-md-white plus-font fw-300 mb-0">Partnering with Passionate Entrepreneurs for a Brighter Future</p>
        </div>

      </div>

      <section class="form-wrap-pitch">
      
        <div class="contentportfolio-sec py-lg-5 py-4">
            <div class="container">
              <div class="row">
                <div class="col-lg-11">
                    <p class="mb-0 fs-40w fw-bold pe-lg-5">Fueling growth, inspiring innovation & driving success across industries.
                        Discover how Stakeboat Capital drives innovation and success across diverse industries.
                        </p>
                </div>
              </div>
            </div>
        </div>

        <div class="portfolio-tabs-main pb-lg-5 pb-4">
            <div class="container">
                <ul class="nav nav-tabs mb-lg-4 mb-3" id="portfolioTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="fundone-tab" data-bs-toggle="tab" data-bs-target="#fundone-tab-pane" type="button" role="tab" aria-controls="fundone-tab-pane" aria-selected="true">FUND I</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="fundtwo-tab" data-bs-toggle="tab" data-bs-target="#fundtwo-tab-pane" type="button" role="tab" aria-controls="fundtwo-tab-pane" aria-selected="false">FUND II</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="portfolioTabContent">
                    <div class="tab-pane fade show active" id="fundone-tab-pane" role="tabpanel" aria-labelledby="fundone-tab" tabindex="0">
                         <div class="funitems-b">
                            <div class="row gy-md-4">

                            <?php
                                   $a=1;
                                   $args = array(
                                   'posts_per_page' => 5,
                                   'order'            => 'ASC',
                                   'post_type'        => 'showcase',
                                   'post_status'      => 'publish',
                                   'suppress_filters' => true,
                                   );
                                   query_posts($args);
                                   if ( have_posts() ) : while (have_posts()) : the_post();
                                                  
                            ?>





                                <div class="col-xl-4 col-md-6">
                                    <a href="<?php the_permalink(); ?>" class="grid-innermain">
                                        <div class="gridiinnerimage position-relative">
                                            <img data-src="<?php the_post_thumbnail_url('servicefirst_thumb');?>" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                                            <div class="gridimage-content text-white">
                                                <p class="fs-25w fw-300">Largest independent analog and mixed-signal semiconductor design services company in India</p>
                                                <p class="fs-25w fw-500">Status: Fully Exited</p>
                                            </div>
                                        </div>
                                        <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                            <a href="<?php the_permalink(); ?>">
                                                <h4 class="fw-600 fs-30w mb-1 black2"><?php the_title();?></h4>
                                                <p class="fs-20w fw-300 black2">  <?php the_content(); ?></p>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                                <?php $a++;endwhile;endif;wp_reset_query();?>









                            </div>
                         </div>
                    </div>


                    <div class="tab-pane fade" id="fundtwo-tab-pane" role="tabpanel" aria-labelledby="fundtwo-tab" tabindex="0">
                        <div class="funitems-b">
                            <div class="row gy-md-4">
                                <div class="col-xl-4 col-md-6">
                                    <a href="#" class="grid-innermain">
                                        <div class="gridiinnerimage position-relative">
                                            <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/port-thumb-1.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                                            <div class="gridimage-content text-white">
                                                <p class="fs-25w fw-300">Largest independent analog and mixed-signal semiconductor design services company in India</p>
                                                <p class="fs-25w fw-500">Status: Fully Exited</p>
                                            </div>
                                        </div>
                                        <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                            <a href="#">
                                                <h4 class="fw-600 fs-30w mb-1 black2">Sankalp Semiconductor</h4>
                                                <p class="fs-20w fw-300 black2">Driving innovation in Semiconductor Design</p>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <a href="#" class="grid-innermain">
                                        <div class="gridiinnerimage position-relative">
                                            <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/port-thumb-2.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                                            <div class="gridimage-content text-white">
                                                <p class="fs-25w fw-300">Largest independent analog and mixed-signal semiconductor design services company in India</p>
                                                <p class="fs-25w fw-500">Status: Fully Exited</p>
                                            </div>
                                        </div>
                                        <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                            <a href="#">
                                                <h4 class="fw-600 fs-30w mb-1 black2">Leixir Dental Lab Group</h4>
                                                <p class="fs-20w fw-300 black2">Transforming Dental care with Precision, Innovation, and Excellence</p>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <a href="#" class="grid-innermain">
                                        <div class="gridiinnerimage position-relative">
                                            <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/port-thumb-3.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                                            <div class="gridimage-content text-white">
                                                <p class="fs-25w fw-300">Largest independent analog and mixed-signal semiconductor design services company in India</p>
                                                <p class="fs-25w fw-500">Status: Fully Exited</p>
                                            </div>
                                        </div>
                                        <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                            <a href="#">
                                                <h4 class="fw-600 fs-30w mb-1 black2">Dvara KGFS</h4>
                                                <p class="fs-20w fw-300 black2">Empowering Rural Communities with Comprehensive Financial Services</p>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <a href="#" class="grid-innermain">
                                        <div class="gridiinnerimage position-relative">
                                            <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/port-thumb-4.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                                            <div class="gridimage-content text-white">
                                                <p class="fs-25w fw-300">Largest independent analog and mixed-signal semiconductor design services company in India</p>
                                                <p class="fs-25w fw-500">Status: Fully Exited</p>
                                            </div>
                                        </div>
                                        <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                            <a href="#">
                                                <h4 class="fw-600 fs-30w mb-1 black2">Leadsquared</h4>
                                                <p class="fs-20w fw-300 black2">Accelerating Sales with Innovative, Tech-driven Solutions</p>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-xl-4 col-md-6">
                                    <a href="#" class="grid-innermain">
                                        <div class="gridiinnerimage position-relative">
                                            <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/port-thumb-5.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                                            <div class="gridimage-content text-white">
                                                <p class="fs-25w fw-300">Largest independent analog and mixed-signal semiconductor design services company in India</p>
                                                <p class="fs-25w fw-500">Status: Fully Exited</p>
                                            </div>
                                        </div>
                                        <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                            <a href="#">
                                                <h4 class="fw-600 fs-30w mb-1 black2">Ozonetel</h4>
                                                <p class="fs-20w fw-300 black2">Elevating Customer Experiences with Cloud-based Communication Solutions</p>
                                            </a>
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
      <!-- contact section end-->

<?php get_footer();?>