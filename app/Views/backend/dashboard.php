<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<?php helper('global'); ?>
<div class="row">

    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="row">
            <div class="col-6">
                <!-- small box -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3><?= count($donatur); ?></h3>

                        <p class="font-weight-bold">
                            Donatur
                            <?php if ($ndonatur > 0) : ?>
                                <span class="right badge badge-danger">Belum terkonfirmasi (<?= $ndonatur; ?>)</span>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-dropbox"></i>
                    </div>
                    <a href="<?= base_url('/donatur'); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-6">
                <!-- small box -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3><?= count($user); ?></h3>

                        <p class="font-weight-bold">
                            User
                            <?php if ($nuser > 0) : ?>
                                <span class="right badge badge-danger">Belum terkonfirmasi (<?= $nuser; ?>)</span>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion  ion-ios-people"></i>
                    </div>
                    <a href="<?= base_url('/user'); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- solid sales graph -->
        <div class="card bg-gradient-dark">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="fas fa-th mr-1"></i>
                    Grafik Keuangan
                </h3>
            </div>
            <div id="container">
                <div class="card-body">

                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Testimoni
                    <?php if (count($testimoni) > 0) : ?>
                        <span class="right badge badge-danger">Tidak ditampilkan (<?= count($testimoni); ?>)</span>
                    <?php endif; ?>
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                    <?php if (count($testimoni) < 1) : ?>
                        <li class="item text-center">
                            <p class="h5">Semua testimoni ditampilkan</p>
                            <p>Tidak ada testimoni baru</p>
                        </li>
                    <?php else : ?>
                        <?php foreach ($testimoni as $t) : ?>
                            <li class="item">
                                <div class="product-img">
                                    <img src="<?= base_url('assets'); ?>/img/uploads/testimoni/<?= $t['img']; ?>" alt="Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a class="product-title"><?= $t['nama']; ?> <span class="font-weight-lighter">(<?= $t['status']; ?>)</span>
                                        <a href="<?= base_url('/testimoni/konfirmasiDb'); ?>/<?= $t['id']; ?>" class="badge badge-warning float-right">belum terkonfirmasi</a></a>
                                    <a href="<?= base_url('/testimoni/hapusDataDb'); ?>/<?= $t['id']; ?>" class="badge badge-danger float-right mr-1">hapus</a></a>
                                    <span class="product-description">
                                        <?= $t['testimoni']; ?>
                                    </span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a href="<?= base_url('/testimoni'); ?>" class="uppercase">Lihat semua testimoni</a>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>

<script src="<?= base_url('assets') ?>/js/highcharts/highcharts.js"></script>
<script src="<?= base_url('assets') ?>/js/highcharts/themes/hc.light.js"></script>
<script>
    Highcharts.chart('container', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Grafik Keuangan Yayasan'
        },
        subtitle: {
            text: 'Income & Outcome'
        },
        xAxis: {
            categories: [
                <?php
                foreach ($keuangan as $k) {
                    # code...
                    echo "'" . date_indo(substr($k['created_at'], 0, 10)) . "'," . " ";
                }
                ?>
            ]
        },
        yAxis: {
            title: {
                text: 'Nominal'
            },
            labels: {
                formatter: function() {
                    var bytes = this.value;
                    var sizes = ['ribu', 'juta', 'miliar', 'triliun'];
                    if (bytes == 0) return '0';
                    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1000)));
                    return parseFloat((bytes / Math.pow(1000, i)).toFixed(1)) + ' ' + sizes[i - 1];
                },
            },
        },
        tooltip: {
            shared: true,
            valueSuffix: ' '
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            },
            series: {
                label: {
                    connectorAllowed: true
                },
                pointStart: 0
            }
        },
        series: [{
            name: 'Income',
            data: [
                <?php
                foreach ($keuangan as $income) {
                    # code...
                    echo $income['income'] . "," . " ";
                }
                ?>
            ]
        }, {
            name: 'Outcome',
            data: [
                <?php
                foreach ($keuangan as $outcome) {
                    # code...
                    echo $outcome['outcome'] . "," . " ";
                }
                ?>
            ]
        }]
    });
</script>
<?= $this->endSection(); ?>