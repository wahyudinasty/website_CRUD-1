<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form  tambah aksi.php
$no_induk = $_POST['no_induk'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$no_hp = $_POST['no_hp'];



//menginput data ke database

mysqli_query($koneksi,"insert into data_pt values ('$no_induk','$nama','$jabatan','$alamat','$umur','$no_hp')");

//mengalihkan ke halaman index.php
header("location:tampil.php");

?>