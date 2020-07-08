<?php
$mydate = getdate(date("U"));
header("content-type:application/vnd-ms-excel");
header("content-disposition:attachment; filename = data-rumah-tahfidz-" . "$mydate[mday]- $mydate[month]- $mydate[year]" . ".xls");
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
                <td colspan="6" style="text-align: center;">
                    <p><b> Data Rumah Tahfidz </b></p>
                </td>
            </tr>
            <tr class="label">
                <td colspan="6" style="text-align: center;">
                    <p>Yayasan Rumah Tahfidz Probolinggo</p>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <th>No</th>
                <th>Rumah Tahfidz</th>
                <th>Pembina</th>
                <th>Alamat</th>
                <th>Jml. Pendidik</th>
                <th>Jml. Santri</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($rumahtahfid as $r) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $r['nama']; ?></td>
                    <td><?= $r['pembina']; ?></td>
                    <td><?= $r['alamat']; ?></td>
                    <td>
                        <?php
                        $db = \Config\Database::connect();
                        // HITUNG JUMLAH PENGAJAR
                        $rt_id = $r['id'];
                        $n = $db->query("SELECT COUNT(`id_pengajar`) AS `n` FROM `mengajar` WHERE `id_rt`= $rt_id")->getRowArray();
                        // HITUNG JUMLAH SANTRI
                        $ns = $db->query("SELECT COUNT(`id`) AS `n` FROM `santri` WHERE `rt_id`= $rt_id")->getRowArray();
                        echo $n['n'];
                        // dd($n);
                        ?>
                    </td>
                    <td><?= $ns['n']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>