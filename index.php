<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Data Mahasiswa UIN STS Jambi</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>DATA MAHASISWA UIN STS JAMBI</h1><center>
    <center><a href="proses_tambah.php">+ &nbsp; Tambah Data Mahasiswa</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>Fakultas</th>
          <th>Gambar</th>
          <th>Edit Hapus</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM tabel_mahasiswa ORDER BY Nim ASC";
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
          <td><?php echo $no; ?></td>
          <td><?php echo $row['Nim']; ?></td>
          <td><?php echo substr($row['Nama'], 0, 20); ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Jurusan']; ?></td>
          <td><?php echo $row['Fakultas']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['Gambar']; ?>" style="width: 120px;"></td>
          <td>
              <a href="proses_edit.php?Nim=<?php echo $row['Nim']; ?>">Edit</a> |
              <a href="proses_hapus.php?Nim=<?php echo $row['Nim']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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