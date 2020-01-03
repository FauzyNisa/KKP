
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
     
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Hello</strong> This is my Portofolio Website</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="<?php echo base_url().'page/contact'; ?>" class="btn btn-primary btn-outline-white px-5 py-3">Contact</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">
        <?php foreach ($data_portofolio as $p){ ?>
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end">
                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3><?php echo $p->judul; ?><br><span class="tag"><?php echo $p->tag; ?></span></h3>
                      </div>
                      <img src="<?php echo base_url().'images/'.$p->foto; ?>" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <span><a href="<?php echo base_url().'page/data_portofolio'; ?>" class="btn btn-primary py-3 px-5">View All My Portofolio</a></span>
          </div>
        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="h1">UI/UX, Data Analyst, drawing in manga style and almost 8 years of experience in <strong class="px-3">Graphics designer</strong> </h2>
          </div>
        </div>
      </div>
    </section>
    </div>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-4">Web &amp; Mobile app design, bring your ideas to life</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-lightbulb-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Strategy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-laptop"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Design</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gear"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Development</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Help &amp; Supports</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

  </body>