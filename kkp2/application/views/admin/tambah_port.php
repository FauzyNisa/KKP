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
            <h1 class="h3 mb-0 text-gray-800">Tambah Portofolio</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin' ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/data_portofolio' ?>">Data Portofolio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Portofolio</li>
            </ol>
          </div>

          <!-- <div class="row"> -->
            <div class="col-lg-auto">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"> <a href="<?php echo base_url().'admin/data_portofolio' ?>"> <i class="fa fa-arrow-left"></i> Back</a> </h6>
                </div>
                <div class="card-body">
                  <?php echo form_open_multipart('admin/proses_tambah'); ?>
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="judul" placeholder="Masukan judul portofolio">
                      <small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
                    </div>
                    <div class="form-group">
                      <label>Tag</label>
                      <select class="form-control" name="tag">
                        <option value="Tag 1">Tag 1</option>
                        <option value="Tag 2">Tag 2</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="number" class="form-control" name="harga" placeholder="Masukan harga portofolio">
                      <small class="form-text text-danger"><?php echo form_error('harga'); ?></small>
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" placeholder="Masukan deskripsi portofolio" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Foto</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="foto">
                        <label class="custom-file-label" for="customFile">Pilih Foto</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Sumbit"/>
                  <?php echo form_close(); ?>
                </div>
              </div>

              <!-- Form Sizing -->

              <!-- Horizontal Form -->
              
            </div>

            <!-- <div class="col-lg-6"> -->
              <!-- General Element -->
              
              <!-- Input Group -->
              
            <!-- </div> -->
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
            
          <!-- </div> -->

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