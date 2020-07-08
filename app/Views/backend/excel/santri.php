<?php
$mydate = getdate(date("U"));
header("content-type:application/vnd-ms-excel");
header("content-disposition:attachment; filename = data-santri-" . "$mydate[mday]- $mydate[month]- $mydate[year]" . ".xls");
helper('global');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }

        .table1,
        th,
        td {
            border: 1px solid #999;
            padding: 8px 20px;
            vertical-align: center;
        }

        .label {
            border: none !important;
        }
    </style>
</head>

<body>

    <table class="table1">
        <thead>
            <tr class="label">
                <td colspan="7" style="text-align: center;">
                    <p><b>Data Santri Tahfidz</b></p>
                </td>
            </tr>
            <tr class="label">
                <td colspan="7" style="text-align: center;">
                    <p>Yayasan Rumah Tahfidz Probolinggo</p>
                </td>
            </tr>
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
</body>

</html>