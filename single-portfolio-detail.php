<?php get_header();?>


  <!-- portfolio section-->
  <section class="portfolio-detail-sec">
        <div class="container">

            <div class="portfolio-detailbannerimage">
              <!-- <img data-src="<?php the_post_thumbnail_url('service_thumb'); ?>" alt="portfolio" class="img-fluid lazyload w-100"> -->
              <img data-src="<?php the_field('banner_image'); ?>" alt="portfolio" class="img-fluid lazyload w-100">
            </div>
       
                <div class="portfolio-detailposition pt-lg-0 pt-4">
                  <div class="fs-65w fw-bold mb-3 lh-2 px-3"><?php the_field('individual_fund_tagline'); ?></div>
                  <p class="fs-50w fw-400 px-4"><?php the_title(); ?></p>
                </div>
          </div>
<!-- 

          <div class="small-logo-portfolio d-lg-block d-none">
            <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/portfolio/detail-logo.png" alt="portfolio" class="img-fluid lazyload">
          </div> -->

          <div class="portfolio-content-details mt-lg-5 mt-3 mx-5">
            <p class="px-3"><?php the_content(); ?></p>
            <p class="px-1"><strong>Investment status: <?php the_field('investment_status_description'); ?></strong></p>
            <div class="btn-wrap">
              <a href="<?php the_field('company_redirection_link'); ?>" class="btn btn-primary plus-font fw-400">MORE ABOUT <?php echo strtoupper(get_the_title()); ?></a>
            </div>
          </div>
        </div>
      </section>

      <section class="form-wrap-pitch">
    <div class="portfolio-tabs-main pb-lg-5 pb-4 py-lg-5 py-4">
        <div class="container">
            <?php
            // Fetch taxonomy terms (Funds)
            $funds = get_the_terms(get_the_ID(), 'funds');
            if ($funds && !is_wp_error($funds)) :
            ?>
                <ul class="nav nav-tabs mb-lg-4 mb-3" id="portfolioTab" role="tablist">
                    <?php foreach ($funds as $index => $fund) : ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" id="tab-<?php echo esc_attr($fund->slug); ?>" data-bs-toggle="tab" data-bs-target="#fund-<?php echo esc_attr($fund->slug); ?>" type="button" role="tab" aria-controls="fund-<?php echo esc_attr($fund->slug); ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                <?php echo esc_html($fund->name); ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content" id="portfolioTabContent">
                    <?php foreach ($funds as $index => $fund) : ?>
                        <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="fund-<?php echo esc_attr($fund->slug); ?>" role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($fund->slug); ?>">
                            <div class="funitems-b">
                                <div class="row gy-md-4">
                                    <?php
                                    // Fetch related portfolio posts for this fund
                                    $related_portfolios = new WP_Query([
                                        'post_type' => 'portfolio-detail',
                                        'tax_query' => [
                                            [
                                                'taxonomy' => 'funds',
                                                'field'    => 'slug',
                                                'terms'    => $fund->slug,                    
                                            ],
                                        ],
                                        'post__not_in' => [get_the_ID()], // Exclude the current post
                                    ]);

                                    if ($related_portfolios->have_posts()) :
                                        while ($related_portfolios->have_posts()) : $related_portfolios->the_post();
                                    ?>
                                            <div class="col-xl-4 col-md-6">
                                                <a href="<?php the_permalink(); ?>" class="grid-innermain">
                                                    <div class="gridiinnerimage position-relative">
                                                        <img src="<?php the_post_thumbnail_url('blog_thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                                        <div class="gridimage-content text-white">
                                                            <p class="fs-25w fw-300"><?php echo wp_trim_words( get_the_content(), 5, '...' );?></p>
                                                            <p class="fs-25w fw-500">Status: <?php the_field('investment_status_description'); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
                                                        <h4 class="fw-600 fs-30w mb-1 black2"><?php the_title(); ?></h4>
                                                        <p class="fs-20w fw-300 black2"><?php the_field('individual_fund_tagline'); ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p>No related projects found.</p>';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
      <!-- contact section end-->









<?php get_footer();?>