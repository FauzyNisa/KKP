
  <body class="text-gray-800 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <?php $this->load->view('admin/partial/navbar'); ?>
      <div class="relative md:ml-64 bg-gray-100">
        <?php $this->load->view('admin/partial/header'); ?>
        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                      <h3 class="font-semibold text-base text-gray-800">
                        Data Portofolio
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                      <a href="#form" data-toggle="modal" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1" onclick="submit('tambah')" 
                        type="button"
                        style="transition:all .15s ease"> tambah</a>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          ID
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Judul
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Tag
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Deskripsi
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Foto
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                          Aksi
                        </th>
                      </tr>
                    </thead>
                    <tbody id="target">

                    </tbody>
                  </table>
                </div>
                <!-- form add, update -->
                <div class="modal fade" id="form" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2>Data Portofolio</h2>
                      </div>
                      <center><font color="red"></font><p id="pesan"></p></center>
                      <table class="table">
                        <tr>
                          <td>Judul</td>
                          <td><input type="text" name="judul" placeholder="Judul Portofolio" class="form-control"/>
                              <input type="hidden" name="id_port" value=""/>
                          </td>
                        </tr>
                        <tr>
                          <td>Tag</td>
                          <td><input type="text" name="tag" placeholder="Tag Portofolio" class="form-control"/></td>
                        </tr>
                        <tr>
                          <td>Deskripsi</td>
                          <td><textarea name="deskripsi" id="" cols="30" rows="10" placeholder="Deskripsi Portofolio" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                          <td>Foto</td>
                          <td><input type="text" name="foto" placeholder="Gambar Portofolio" class="form-control"/></td>
                        </tr>
                        <tr>
                          <td> </td>
                          <td>
                            <button type="button" id="btn-tambah" onclick="tambah_data()" class="btn btn-primary">Tambah</button>
                            <button type="button" id="btn-ubah" onclick="ubah_data()" class="btn btn-primary">Ubah</button>
                            <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
          </div>
          <?php $this->load->view('admin/partial/footer'); ?>
        </div>
      </div>
    </div>
    