<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php $this->load->view('admin/partials/head'); ?>
<!-- head -->
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('admin/partials/sidebar'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php $this->load->view('admin/partials/topbar'); ?>
        <!-- Topbar -->
        
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-7 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Portofolio</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="<?php echo base_url().'admin/data_portofolio' ?>">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Tag</th>
                        <th>Deskripsi</th>
                        <th>Waktu</th>
                        <th>Harga</th>
                        <th>Foto</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($portofolio as $p){ ?>
                      <tr>
                        <td><?php echo $p->id_port; ?></td>
                        <td><?php echo $p->judul; ?></td>
                        <td><?php echo $p->tag; ?></td>
                        <td><?php echo $p->deskripsi; ?></td>
                        <td><?php echo $p->waktu; ?></td>
                        <td>Rp <?php echo number_format($p->harga,2,',','.'); ?></td>
                        <td> <a href="<?php echo base_url().'images/'.$p->foto; ?>" class="zoom" > <img src="<?php echo base_url().'images/'.$p->foto; ?>" width="100px" /></a></td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <?php $this->load->view('admin/partials/footer'); ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- top up & script -->
  <?php $this->load->view('admin/partials/script'); ?>

</body>

</html>