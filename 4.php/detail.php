 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM hero WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
  <title>CRUD mobile legend</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">   
  </head>
  <body>
  <center>
        <h1>Detail Hero <?php echo $data['nama']; ?></h1>
      <center>
  <table style="width: 550px">
    <tr>
      <td> 
        <div>        
          <img src="gambar/<?php echo $data['gambar_produk']; ?>" style="width: 300px;float: left;margin-bottom: 5px;">         
        </div>
      </td>
      <td>
        <ul>
          <li><h2>id hero = <?php echo $data['id']; ?></h2></li>
          <li><h2><?php echo $data['nama']; ?></h2></li>
          <li><h2><?php echo $data['id_role']; ?></h2></li>
          <li><h2><?php echo $data['deskripsi']; ?></h2></li>
        </ul>
      </td>
    </tr>
  </table>     
     
  </body>
</html>