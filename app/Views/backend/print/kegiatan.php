<?php helper('global');
$db = \Config\Database::connect(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="container">
    <div class="text-left mt-5 mb-2">
        <p class="h4">Data Kegiatan</p>
        <P class="h5">YARUTHAB</P>
    </div>

    <div class="row">
        <div class="col-12">
            <ol class="ml-n4">
                <?php foreach ($kegiatan as $k) : ?>
                    <li class="">
                        <div class="font-weight-bold">
                            <?= $k['nama']; ?>
                        </div>
                        <p>Tanggal pelaksanaan <?= longdate_indo($k['tgl_pelaksanaan']); ?><br><?= $k['deskripsi']; ?></p>
                        <p>Foto Kegiatan :</p>
                        <div class="row">
                            <?php $foto = $db->table('foto_kegiatan')
                                ->select('img')
                                ->getWhere(['id_kegiatan' => $k['id']])->getResultArray();
                            ?>
                            <?php foreach ($foto as $f) : ?>
                                <div class="col-sm-3 mt-2">
                                    <a class="thumbnail">
                                        <img src="<?= base_url('assets'); ?>/img/uploads/galeri/<?= $f['img']; ?>" class="img-fluid" alt="">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>

    </div>

    <script>
        window.print();
    </script>
</body>

</html>