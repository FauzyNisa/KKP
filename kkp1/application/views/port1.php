
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?php echo base_url().'page'; ?>">Home</a></span> <span>Portfolio</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Portfolio</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Works</span>
            <h2 class="mb-4">View our works below to see our design and way of development.</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <?php foreach ($data_portofolio as $p){ ?>
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="#" class="image" style="background-image: url('<?php echo base_url().'images/'.$p->foto; ?>'); " data-scrollax=" properties: { translateY: '-20%'}">
              </a>
              <div class="text">
                <h4 class="subheading"><?php echo $p->tag; ?></h4>
                <h2 class="heading"><a href="#"><?php echo $p->judul; ?></a></h2>
                <p><?php echo $p->deskripsi; ?></p>
              </div>
            </div>
          <?php } ?> 
        </div>
      </div>
    </section>
      

    
  </body>