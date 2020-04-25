<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD mobile legend</title>
    
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>id </label>
          <input type="text" name="id" autofocus="" required="" />
        </div>
        <div>
          <label>Nama </label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>id_role</label>
         <input type="text" name="id_role" autofocus="" required=""/>
        </div>
        <div>
          <label>Gambar hero</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
          <label>deskripsi</label>
         <input type="textarea" name="deskripsi" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>