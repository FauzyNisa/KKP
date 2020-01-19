  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>