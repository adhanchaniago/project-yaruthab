<?php
$mydate = getdate(date("U"));
header("content-type:application/vnd-ms-excel");
header("content-disposition:attachment; filename = data-pengajar-" . "$mydate[mday]- $mydate[month]- $mydate[year]" . ".xls");
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
                    <p><b> Data Ustadz / Ustadzah Pengajar</b></p>
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
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Tempat Mengajar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pengajar as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= $p['no_hp']; ?></td>
                    <td>
                        <?php
                        $db = \Config\Database::connect();
                        $id = $p['id'];
                        $data = $db->table('rumah_tahfid')
                            ->select('rumah_tahfid.nama as nama')
                            ->join('mengajar', 'rumah_tahfid.id = mengajar.id_rt')->getWhere(['mengajar.id_pengajar' => $id])->getResultArray();
                        $i = 1;
                        $x = count($data);
                        foreach ($data as $r) {

                            if ($i < $x) {
                                echo $r['nama'] . ', ';
                            } else {
                                echo $r['nama'];
                            }

                            $i++;
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>