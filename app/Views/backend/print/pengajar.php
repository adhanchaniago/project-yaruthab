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
    <script>
        window.print();
    </script>
</body>

</html>