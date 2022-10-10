<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'tambah_produk.php';
include 'koneksi.php'; 

  $Nim= $_POST['Nim'];
  $Nama= $_POST['Nama'];
  $Email= $_POST['Email'];
  $Jurusan= $_POST['Jurusan'];
  $Fakultas= $_POST['Fakultas'];
  $Gambar= $_FILES['Gambar']['name'];

//cek dulu jika ada gambar produk jalankan coding ini
if($Gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpeg'); //ekstensi file gambar yang bisa diupload 
  //$x = explode('.', $Gambar); //memisahkan nama file dengan ekstensi yang diupload
  //$ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['Gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$Gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'Gambar/'.$nama); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO tabel_mahasiswa (Nim, Nama, Email, Jurusan, Fakultas, Gambar) VALUES ('$Nim', '$Nama', '$Email', '$Jurusan', '$Fakultas', '$Gambar')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpeg atau png.');window.location='tambah_produk.php';</script>";
            }
} else {
   $query = "INSERT INTO tabel_mahasiswa (Nim, Nama, Email, Jurusan, Fakultas, Gambar) VALUES ('$Nim', '$Nama', '$Email', '$Jurusan', '$Fakultas', '$Gambar')";
                  $result = mysqli_query($tambah_produk, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($tambah_produk).
                           " - ".mysqli_error($tambah_produk));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}

 

