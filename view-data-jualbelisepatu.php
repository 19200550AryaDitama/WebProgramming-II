<html>
    <head>

        <title>Tampil Data Pembeli</title>
</head>
<body>
    <center>
        <table>
            <tr><th colspan="3">Tampil Data Pembeli</th></tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr><th>Nama pembeli</th><th>:</th>
            <td><?= $nama; ?></td></tr>
            <tr><td>No hp</td><td>:</td>
            <td><?= $no; ?></td></tr>
            <tr><td>Merk</td><td>:</td>
            <td><?= $merk; ?></td></tr>
            <tr><td>Ukuran</td><td>:</td>
            <td><?= $ukuran; ?></td></tr>
            <tr><td colspan="3" align="center">
                <a href="<?= base_url('jualbelisepatu'); ?>">Kembali</a></td>
            
            
            </tr>
        </table>
    </center>
</body>
</html>