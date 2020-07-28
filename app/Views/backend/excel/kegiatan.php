<?php
$mydate = getdate(date("U"));
header("content-type:application/vnd-ms-excel");
header("content-disposition:attachment; filename = data-kegiatan-yaruthab-" . "$mydate[mday]- $mydate[month]- $mydate[year]" . ".xls");
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
            border: 1px solid white !important;
        }
    </style>
</head>

<body>

    <table class="table1">
        <thead>
            <tr class="label">
                <td colspan="5" style="text-align: center;">
                    <p><b> Data Kegiatan </b></p>
                </td>
            </tr>
            <tr class="label">
                <td colspan="5" style="text-align: center;">
                    <p>Yayasan Rumah Tahfidz Probolinggo</p>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Tgl Pelaksanaan</th>
                <th>tempat</th>
                <th>Penanggung Jawab</th>
            </tr>
        </thead>
        <tbody>
            <?php $y = 0; ?>
            <?php $y = 1; ?>
            <?php for ($i = 0; $i < count($kegiatan); $i++) : ?>
                <tr>
                    <td><?= $y++; ?></td>
                    <td><?= $kegiatan[$i]['nama']; ?></td>
                    <td><?= longdate_indo($kegiatan[$i]['tgl_pelaksanaan']); ?></td>
                    <td><?= $kegiatan[$i]['tempat']; ?></td>
                    <td><?= $kegiatan[$i]['pj']; ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>