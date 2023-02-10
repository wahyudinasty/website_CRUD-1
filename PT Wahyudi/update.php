<?php
//koneksi database
include 'koneksi.php';

//meng update data yang di kirim dari form  tambah aksi.php
$no_induk = $_POST['no_induk'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$no_hp = $_POST['no_hp'];



//meng update data ke database

mysqli_query($koneksi,"UPDATE data_pt SET nama='$nama',jabatan='$jabatan',alamat='$alamat',umur='$umur',no_hp='$no_hp'where no_induk='$no_induk'");


//mengalihkan ke halaman index.php
header("location:tampil.php");

?>