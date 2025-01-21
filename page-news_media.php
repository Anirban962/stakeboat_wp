<?php get_header();
/*Template Name: News & Media Page*/?>
<style>
    .filter-section .btn-group .btn 
	{
     margin-right: 20px;
	font-size: 23px !important;
    font-variant: all-petite-caps;
    padding: 0px 20px;
    border-radius: 3px !important;
    }
    .inthenews-section 
	{
      margin-top: 20px;
    }
	.innews-section 
	{
    background-color: rgba(241, 246, 255, 0.5);
	}
	.newstitle
	{
	padding: 0 0 3rem 0;
	color: #202834;
	}
	.filterbox{
		background-color: #fff;
	}
	.filtersubbox
	{
	padding: 5px;
	}
	.gridinner-content 
	{
    padding: 30px;
    background-color: #fff;
	}
	.black2 
	{
    margin-top: 20px;
	}
	.datefield
	{
		font-size: 11px;
		font-weight: 600;
	}	
	.detail-herobanner
	{
		background-color: #EBD5E3;
		height: 350px;
	}
	.detail-herobanner-position{
		top: 60%;
	}
	.btn-outline-light{
	--bs-btn-border-color: #fff;
	color: #000;
	font-weight: 700;	
	}
	
	@media only screen and (max-width: 991px)
	{
		.detail-herobanner
		{
			height: 150px;
		}
	}
	button.btn.btn-outline-light.filter-btn:hover {
		background: #a13178;
		color: #fff;
	}
	.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #a13178;
    --bs-btn-border-color: #a13178;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0b5ed7;
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #a13178;
    --bs-btn-disabled-border-color: #a13178;
	}
	.datefield span {
    opacity: 0.5;
	}
	.detail-heroheading{
	font-size: 35px;
    font-weight: 700;
	}
</style>


   <!-- portfolio section-->
   <div class="detail-herobanner position-relative">        
        <div class="detail-herobanner-position">
          <!-- <div class="label-date fw-500 fs-18w mb-2 text-md-white">JUN 10, 2024</div> -->
          <h1 class="fs-50w plus-font fw-600 detail-heroheading mb-3">
            Stay updated with the latest news and developments at Stakeboat Capital.    
        </h1>
          <!-- <p class="fs-30w text-md-white plus-font fw-300 mb-0">Bengaluru-headquartered Difacto will use the funds to expand across sectors such as cars, home appliances and electronics</p> -->
        </div>

      </div>


      
        <!--<div class="inthenews-nextsection pt-lg-2 pt-4">
           <div class="container">
              <div class="row g-md-3 g-4">
                <div class="col-lg-4 col-md-6">
                  <div class="innextsbox">
                   <a href="https://economictimes.indiatimes.com/tech/funding/robotics-company-difacto-raises-4-8-million-from-stakeboat-capital/articleshow/110506424.cms" target="_blank">
					<h5 class="fw-300 fs-18w">IN THE NEWS</h5>
                    <p class="fw-500 fs-25w">Robotics company Difacto raises $4.8 million from Stakeboat Capital</p>
                   </a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="innextsbox">
                    <a href="https://www.vccircle.com/stakeboatcapital-plans-it-services-platform-places-first-bet" target="_blank">
					 <h5 class="fw-300 fs-18w">IN THE NEWS</h5> 
                      <p class="fw-500 fs-25w">Stakeboat Capital Plans IT Services Platform, Places First Bet...</p>
                     </a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="innextsbox">
                    <a href="https://www.livemint.com/companies/news/stakeboats-second-fund-eyes-control-oriented-deals-scaled-up-firms-11700416643293.html" target="_blank">
				<h5 class="fw-300 fs-18w">IN THE NEWS</h5>
                      <p class="fw-500 fs-25w">Stakeboat’s second fund eyes control-oriented deals, scaled up firms...</p>
                     </a>
                  </div>
                </div>
              </div>
           </div>
        </div> -->

        <div class="innews-section">
        <div class="container">
            <div class="fs-50w fw-bold lh-1 newstitle">In The News</div>
          </div>
        

	    <div class="filter-section mb-4">
		 <div class="container">
		 <div class="fs-50w fw-bold lh-1 filterbox">
		   <div class="btn-group filtersubbox" role="group" aria-label="Filter by year">
				<button type="button" class="btn btn-primary filter-btn" data-year="all">ALL</button>
				<button type="button" class="btn btn-outline-light filter-btn" data-year="2024">2024</button>
				<button type="button" class="btn btn-outline-light filter-btn" data-year="2023">2023</button>
				<button type="button" class="btn btn-outline-light filter-btn" data-year="2021">2021</button>
				<button type="button" class="btn btn-outline-light filter-btn" data-year="2017">2017</button>
		   </div>
		   </div>
		 </div>
	    </div>

        <div class="inthenews-section py-5">
          <div class="container">
            <div class="row gy-md-4">
			
              <div class="col-xl-4 col-md-6" data-year="2024">
                  <a href="https://www.linkedin.com/feed/update/urn:li:activity:7127245860140183552" class="grid-innermain" target="_blank">
                      <div class="gridiinnerimage position-relative">
                          <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/news/thumb-1.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                      </div>
                      <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
							<p class="datefield">MAR 20 2024 | <span>LINKEDIN</span></p>
                          <a href="https://www.linkedin.com/feed/update/urn:li:activity:7127245860140183552">
                              <h4 class="fw-600 fs-25w mb-1 black2">Stakeboat Capital; Fund II invests in Newgen Digital Works ...</h4>
                          </a>
                      </div>
                  </a>
              </div>

              <div class="col-xl-4 col-md-6" data-year="2023">
                  <a href="https://www.vccircle.com/stakeboats-second-pe-fund-oversubscribed-aum-crosses-150-mn" class="grid-innermain" target="_blank">
                      <div class="gridiinnerimage position-relative">
                          <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/news/thumb-2.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                      </div>
                      <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
					  <p class="datefield">SEP 18 2023 | <span>ARTICLE</span></p>
                          <a href="https://www.vccircle.com/stakeboats-second-pe-fund-oversubscribed-aum-crosses-150-mn">
                              <h4 class="fw-600 fs-25w mb-1 black2">Stakeboat’s Second PE Fund oversubscribed</h4>
                          </a>
                      </div>
                  </a>
              </div>

              <div class="col-xl-4 col-md-6" data-year="2023">
                  <a href="https://www.stakeboat.com/images/SBC-Newsletter-COMPASS_April-2023.pdf" class="grid-innermain" target="_blank">
                      <div class="gridiinnerimage position-relative">
                          <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/news/thumb-3.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                      </div>
                      <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
					  <p class="datefield">MAR 20 2023 | <span>NEWSLETTER</span></p>
                          <a href="https://www.stakeboat.com/images/SBC-Newsletter-COMPASS_April-2023.pdf">
                              <h4 class="fw-600 fs-25w mb-1 black2">Our Newsletter From The Manager’s Desk</h4>
                          </a>
                      </div>
                  </a>
              </div>

              <div class="col-xl-4 col-md-6" data-year="2023">
                  <a href="https://www.zeebiz.com/startups/news-stakeboat-capital-invests-rs-50-crore-in-healthcare-startup-sukino-indian-startups-healthtech-vc-firm-venture-capital-angel-funding-226703" class="grid-innermain" target="_blank">
                      <div class="gridiinnerimage position-relative">
                          <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/news/thumb-4.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                      </div>
                      <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
					  <p class="datefield">MAR 20 2023 | <span>ARTICLE</span></p>
                          <a href="https://www.zeebiz.com/startups/news-stakeboat-capital-invests-rs-50-crore-in-healthcare-startup-sukino-indian-startups-healthtech-vc-firm-venture-capital-angel-funding-226703">
                              <h4 class="fw-600 fs-25w mb-1 black2">Stakeboat Capital invests Rs 50 crore in healthcare startup Sukino</h4>
                          </a>
                      </div>
                  </a>
              </div>


              <div class="col-xl-4 col-md-6" data-year="2021">
                  <a href="https://www.livemint.com/companies/start-ups/ozonetel-raises-series-a-funding-of-5-million-from-stakeboat-capital-11633527706715.html" class="grid-innermain" target="_blank">
                      <div class="gridiinnerimage position-relative">
                          <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/news/thumb-5.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                      </div>
                      <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
					  <p class="datefield">OCT 20 2021 | <span>ARTICLE</span></p>
                          <a href="https://www.livemint.com/companies/start-ups/ozonetel-raises-series-a-funding-of-5-million-from-stakeboat-capital-11633527706715.html">
                              <h4 class="fw-600 fs-25w mb-1 black2">Ozonetel raises Series A funding of $5 million from Stakeboat Capital</h4>
                          </a>
                      </div>
                  </a>
              </div>
              <div class="col-xl-4 col-md-6" data-year="2017">
                <a href="https://www.livemint.com/Companies/HWwZewRUXbqIwnaOhDBtPJ/Sankalp-Semiconductor-raises-5million-from-Stakeboat-Capit.html" class="grid-innermain" target="_blank">
                    <div class="gridiinnerimage position-relative">
                        <img data-src="<?php echo bloginfo('template_directory');?>/assets/images/news/thumb-6.png" alt="thumb" width="100%" height="536" class="img-fluid lazyload">
                    </div>
                    <div class="gridinner-content pt-lg-4 pt-3 pb-lg-4 pb-3">
					<p class="datefield">OCT 17 2017 | <span>ARTICLE</span></p>
                        <a href="https://www.livemint.com/Companies/HWwZewRUXbqIwnaOhDBtPJ/Sankalp-Semiconductor-raises-5million-from-Stakeboat-Capit.html">
                            <h4 class="fw-600 fs-25w mb-1 black2">Sankalp Semiconductor raises $5 million from Stakeboat Capital</h4>
                        </a>
                    </div>
                </a>
            </div>
          </div>
          </div>
        </div>
		</div>
      
      <!-- contact section end-->

<?php get_footer();?>

<script>
    document.querySelectorAll('.filter-btn').forEach(button => {
      button.addEventListener('click', function () {
        const selectedYear = this.getAttribute('data-year');
        const newsItems = document.querySelectorAll('.inthenews-section .row .col-md-6');

        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.replace('btn-primary', 'btn-outline-light'));
        this.classList.replace('btn-outline-light', 'btn-primary');

        newsItems.forEach(item => {
          const newsYear = item.getAttribute('data-year');
          if (selectedYear === 'all' || newsYear === selectedYear) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });

    window.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.inthenews-section .row .col-md-6').forEach(item => {
        item.style.display = 'block';
      });
      document.querySelector('[data-year="all"]').classList.replace('btn-outline-light', 'btn-primary');
    });
  </script>