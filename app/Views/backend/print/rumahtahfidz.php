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
        <p class="h5">Data Rumah Tahfidz</p>
        <P class="h6">Anggota YARUTHAB</P>
    </div>
    <table class="table table-striped mt-4">
        <thead class="thead-light">
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
                    <th scope="row"><?= $i++; ?></th>
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
    <script>
        window.print();
    </script>
</body>

</html>