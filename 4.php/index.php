<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD mobile legend</title>
   <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <center><h1>Mobile ganggu</h1><center>
    <center><a href="tambah_hero.php">+ &nbsp; Tambah Hero</a><center>
    <br/>
    <table>
      <thead>
        <tr>          
          <th style="text-align: center;">Gambar</th>
          <th style="text-align: center">Action</th>
        </tr>
    </thead>
    <tbody> 
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM hero ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
        
          <td style="text-align:center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 200px;"></td>
          <td>
              <a  style="float: center;" href="detail.php?id=<?php echo $row['id']; ?>">Detail</a> |
              <a  style="float: center;" href="edit_hero.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a style="float: center;" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>