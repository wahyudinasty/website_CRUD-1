<?php
include 'koneksi.php';

$no_induk =$_GET['no_induk'];

mysqli_query($koneksi,"delete from data_pt where no_induk ='$no_induk'");

header("location:tampil.php");

?>