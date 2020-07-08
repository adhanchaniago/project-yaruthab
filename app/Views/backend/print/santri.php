<?php helper('global'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="container">
    <div class="text-center mt-5 ">
        <p class="h5">Data Santri Tahfidz</p>
        <P class="h6">Anggota YARUTHAB</P>
    </div>
    <table class="table table-striped mt-4">
        <thead class="thead-light">
            <tr></tr>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Rumah Tahfidz</th>
                <th>Tgl. Mendaftar</th>
                <th>Wali Santri</th>
                <th>No. Telp Wali Santri</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($santri as $s) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $s['nama']; ?></td>
                    <td><?= $s['rt']; ?></td>
                    <td><?= longdate_indo($s['tgl_daftar']); ?></td>
                    <td><?= $s['ortu']; ?></td>
                    <td>+<?= $s['no_hp']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>