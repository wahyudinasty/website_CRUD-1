<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            position: center;
            background: blue;
            /* background-image: url(img/fr.jpg); */
            background-color:blue;
            background-size: 2048px;
            background-repeat: no-repeat;

        }

        table {
            /* background-image: url(img/fr.jpg); */
            background: transparant;
            color: skyblue;
        }

        h2,a,{
            color: skyblue;
        }

        tr td input {
            color: red;
        }
    </style>
    <title>Tambah Data</title>
</head>

<body>
    <h2>Tambah Data</h2>
    <br />
    <a href="tampil.php">Kembali</a>
    <br />
    <br />
    <form method="post" action="tambah_aksi.php">

        <table>
            <tr>
                <td background-color:blue>Nomor Induk</td>
                <td><input type="number" name="no_induk"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur"></td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td><input type="number" name="no_hp"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="tombol" value="SIMPAN"
                        onClick="return confirm('Apakah Data Sudah Benar ?')">
                </td>
            </tr>
        </table>
</body>

</html>