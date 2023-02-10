<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{
      background: blue;
      /* background-image: url(img/nu.jpg); */
      background-size: 2048px;
      background-repeat: no-repeat;

    }
    table{
      /* background-image: url(img/nu.jpg); */
     
      border: 2px gradient;
      background: transparant;
      color: skyblue;
      
    }
    h2, a{
      color : skyblue;
    }
    
  </style>

	<title>Edit Data</title>
</head>
<body>
	<h2>Edit Data</h2>
	<br/>
	<a href="tampil.php">Kembali</a>
	<br/>
	<?php
	include'koneksi.php';
	$no_induk = $_GET['no_induk'];
	$data = mysqli_query($koneksi,"select * from data_pt where no_induk = '$no_induk'");
			while($d = mysqli_fetch_array ($data))
			{
		?>
				
			<form method="post" action="update.php">
				<table>
					<tr>	
						<td> Nama </td>
						<td>
						    <input type="hidden" name="no_induk" value="<?php echo $d['no_induk'];?>">
							<input type="text" name="nama" value="<?php echo $d['nama'];?>">
								
						</td>
					</tr>
					<tr>	
						<td> Jabatan </td>
						<td>	
							<input type="text" name="Jabatan" value="<?php echo $d['jabatan'];?>">
								
						</td>
						</tr>
						<tr>	
							<td> Alamat </td>
							<td>	
							<input type="text" name="alamat" value="<?php echo $d['alamat'];?>">
							</td>
						</tr>
                        <tr>
				            <td>Umur</td>
				            <td><input type="number" name="umur" value="<?php echo $d['umur'];?>"></td>
			            </tr>
                        <tr>
				            <td>No Handphone</td>
				            <td><input type="number" name="no_hp" value="<?php echo $d['no_hp'];?>"></td>
			            </tr>
						<tr>	
								<td></td>
								<td>
								<input type="submit" value="SIMPAN PERUBAHAN">
								</td>
						</tr>
				</table>
			</form>
			<?php
				
			}
		    ?>
</body>
</html>