<!DOCTYPE html>
<html lang="en">

<h1>TAMBAH</h1>

<?php echo form_open_multipart('page/proses_tambah_portofolio');?>

Judul <input type="text" name="judul"/> <br>
Tag <input type="text" name="tag"/> <br>
Deskripsi <input type="text" name="deskripsi"/> <br>
Foto <input type="file" name="foto"/> <br>

<input type="submit" value="Tambah Portofolio"/>

<?php echo form_close();?>

</html>