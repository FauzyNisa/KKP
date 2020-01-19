    <script type="text/javascript">
    ambil_data();    
      function ambil_data(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()."admin/ambil_portofolio"?>',
          dataType:'json',
          success: function(data){
            console.log(data);
            var baris='';
            for(var i=0 ; i<data.length ; i++){
              baris += '<tr>'+
                          '<th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">'+ data[i].id_port + '</th>' +
                          '<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">'+ data[i].judul + '</td>' +
                          '<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">'+ data[i].tag + '</td>' +
                          '<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">'+ data[i].deskripsi + '</td>' +
                          '<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">'+ data[i].foto + '</td>' +
                          '<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"><a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit('+data[i].id_port+')">Ubah</a> <a onclick="hapus_data('+data[i].id_port+')" class="btn btn-danger">Hapus</a> </td>' +
                        '</tr>';
            }
            $('#target').html(baris);
          }
        });
      }

      function tambah_data(){
        var judul=$("[name='judul']").val();
        var tag=$("[name='tag']").val();
        var deskripsi=$("[name='deskripsi']").val();
        var foto=$("[name='foto']").val();
        console.log(judul);
        console.log(tag);
        console.log(deskripsi);
        console.log(foto);

        $.ajax({
          type:'POST',
          data: 'judul='+judul+'&tag='+tag+'&deskripsi='+deskripsi+'&foto='+foto,
          url: '<?php echo base_url()."admin/tambah_portofolio"?>',
          dataType:'json',
          success: function(hasil){
            console.log(hasil);
            $("#pesan").html(hasil.pesan);

            if(hasil.pesan==''){
              $("#form").modal('hide');
              ambil_data();

              $("[name='judul']").val('');
              $("[name='tag']").val('');
              $("[name='deskripsi']").val('');
              $("[name='harga']").val('');
            }
          }
        });
      }

      function submit(n){
        if(n=='tambah'){
          $('#btn-tambah').show();
          $('#btn-ubah').hide();
        }else{
          $('#btn-ubah').show();
          $('#btn-tambah').hide();

          $.ajax({
            type:"POST",
            data:'id_port='+n,
            url:'<?php echo base_url()."admin/ubah_portofolio"?>',
            dataType:'json',
            success: function(hasil){
              console.log(hasil);
              $('[name="id_port"]').val(hasil[0].id_port);
              $('[name="judul"]').val(hasil[0].judul);
              $('[name="tag"]').val(hasil[0].tag);
              $('[name="deskripsi"]').val(hasil[0].deskripsi);
              $('[name="foto"]').val(hasil[0].foto);
            }
          });
        }
      }

      function ubah_data(){
        var id_port=$("[name='id_port']").val();
        var judul=$("[name='judul']").val();
        var tag=$("[name='tag']").val();
        var deskripsi=$("[name='deskripsi']").val();
        var foto=$("[name='foto']").val();

        $.ajax({
          type:'POST',
          data: 'id_port='+id_port+'&judul='+judul+'&tag='+tag+'&deskripsi='+deskripsi+'&foto='+foto,
          url: '<?php echo base_url()."admin/proses_ubah"?>',
          dataType:'json',
          success: function(hasil){
            $("#pesan").html(hasil.pesan);

            if(hasil.pesan==''){
              $("#form").modal('hide');
              ambil_data();
            }
          }
        });
      }

      function hapus_data(id_port){
        var konfirmasi= confirm('Apakah anda yakin akan menghapus data ini?');
        if(konfirmasi){
          $.ajax({
            type:'POST',
            data:'id_port='+id_port,
            url:'<?php echo base_url()."admin/hapus_portofolio"?>',
            success: function(){
              ambil_data();
              
            }
          });
        }
      }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        var popper = new Popper(element, document.getElementById(dropdownID), {
          placement: "bottom-end"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }
    </script>
  </body>
</html>
