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
            <h1 class="h3 mb-0 text-gray-800">Data Portofolio</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin' ?>">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Portofolio</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
            <?php if($this->session->flashdata('tambah')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data portofolio <strong>berhasil</strong> <?php echo $this->session->flashdata('tambah'); ?> .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('hapus')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data portofolio <strong>berhasil</strong> <?php echo $this->session->flashdata('hapus'); ?> .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Portofolio</h6>
                  <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo form_open('admin/data_portofolio') ?>
                      <div class="input-group">
                        <select class="form-control" name="sort">
                          <option value="Normal">Sort By</option>
                          <option value="Tag 1">Tag 1</option>
                          <option value="Tag 2">Tag 2</option>
                        </select>
                        <div class="input-group-append">
                          <input class="btn btn-primary" type="submit" value="pilih" name="pilih">
                        </div>
                      </div>
                    <?php echo form_close() ?>
                  </h6>
                  <h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url().'admin/tambah_portofolio'?>" class="btn btn-primary"> <i class="fa fa-plus-circle"></i></a></h6>
                  </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Tag</th>
                        <th>Deskripsi</th>
                        <th>Waktu</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Tag</th>
                        <th>Deskripsi</th>
                        <th>Waktu</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php $no = 1;
                    foreach ($portofolio as $p){ ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $p->id_port; ?></td>
                        <td><?php echo $p->judul; ?></td>
                        <td><?php echo $p->tag; ?></td>
                        <td><?php echo $p->deskripsi; ?></td>
                        <td><?php echo $p->waktu; ?></td>
                        <td>Rp <?php echo number_format($p->harga,2,',','.'); ?></td>
                        <td> <a href="<?php echo base_url().'images/'.$p->foto; ?>" class="zoom" ><img src="<?php echo base_url().'images/'.$p->foto; ?>" width="100px" /></a></td>
                        <td>
                          <a href="<?php echo base_url().'admin/edit_portofolio/'.$p->id_port; ?>" class="btn btn-info">Edit</a>
                          <a onclick="return confirm('Apakaha anda yakin akan menghapus portofolio <?php echo $p->judul; ?> ?');" href="<?php echo base_url().'admin/hapus_portofolio/'.$p->id_port; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
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