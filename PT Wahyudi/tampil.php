
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                background: blue;
                background-image: url(img/nu.jpg);
                background-size: 2048px;
                background-repeat: no-repeat;

            }

            table {
                /* background-image: url(img/nu.jpg); */

                border: 2px gradient;
                background: transparant;
                color: skyblue;

            }

            h2,
            a {
                color: skyblue;
            }
            table{
                white-space: nowrap;
                text-decoration: none;
                margin-top: 5px;
                margin-bottom: 2px;
                font-size: 15px;
                font-family: Source Sans Pro, sans-serif;
            }
        </style>
        <link rel="icon" href="img/2.jpg">
        <title>Menampilkan Data</title>
    </head>

    <body text-align=center>
        <h2>Data Perusahaan</h2>
        <small><a href=gallery.html>Gallery</a></small>
        <br><a href="tambah.php">TambahKan Data</a><br>
        
        <table border="3">
            <tr>
                <th>No</th>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>No Handphone</th>
                <th colspan=2>Opsi</th>
            </tr>
            <?php include 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi, "select * from data_pt");

            while($d=mysqli_fetch_array ($data)) {

    ?>
    <tr>
                <td><?php echo $no++;
    ?></td>
                <td><?php echo $d['no_induk'];
    ?></td>
                <td><?php echo $d['nama'];
    ?></td>
                <td><?php echo $d['jabatan'];
    ?></td>
                <td><?php echo $d['alamat'];
    ?></td>
                <td><?php echo $d['umur'];
    ?></td>
                <td><?php echo $d['no_hp'];
    ?></td>
                
                <td><a href="edit.php?no_induk=<?php echo $d['no_induk']; ?>">edit </a></td>
                <td><a href="delete.php?no_induk=<?php echo $d['no_induk']; ?>">hapus </a></td>
                <!-- <td><a href="update.php?no_induk=<?php echo $d['no_induk']; ?>">update </a></td> -->
            
    </tr>
    <?php
    
}

?>
        </table>
        <?php include 'footer.php';
?>
    </body>

    </html>