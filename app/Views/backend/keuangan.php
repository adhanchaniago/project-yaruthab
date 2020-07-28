<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>
<?php helper('global'); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <p class="mb-1">Sisa Saldo : <b><?= rupiah($total); ?></b></p>
                    <a href="<?= base_url(); ?>" data-toggle="modal" data-target="#income" class="btn btn-primary tombol-tambah"><i class="fas fa-plus"></i> Uang Masuk</a>
                    <a href="<?= base_url(); ?>" data-toggle="modal" data-target="#outcome" class="btn btn-secondary tombol-tambah"><i class="fas fa-plus"></i> Uang Keluar</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="display: none;">no</th>
                            <th>Uang Masuk</th>
                            <th>Uang Keluar</th>
                            <th>Total Keuangan</th>
                            <th>Sumber</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th class="text-center"><b>Hapus</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($keuangan as $k) : ?>
                            <tr>
                                <td style="display: none;"><?= $i; ?></td>
                                <td><?= rupiah($k['income']); ?></td>
                                <td><?= rupiah($k['outcome']); ?></td>
                                <td><?= rupiah($k['total']); ?></td>
                                <td><?= $k['sumber']; ?></td>
                                <td><?= $k['keterangan']; ?></td>
                                <td><?= date_indo(substr($k['created_at'], 0, 10)); ?></td>
                                <td class="text-center"><a href="<?= base_url('/keuangan'); ?>/<?= $k['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="display: none;">no</th>
                            <th>Uang Masuk</th>
                            <th>Uang Keluar</th>
                            <th>Total Keuangan</th>
                            <th>Sumber</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th class="text-center"><b>Hapus</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal tambah data -->
<div class="modal fade" id="income" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5" id="exampleModalLabel"><i class="icofont-pencil-alt-2"></i> Tambah income</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/keuangan/income'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row  justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nama-i">Nominal</label>
                                    <input type="number" class="form-control" name="nominal" id="nama-i" placeholder="Rp. " required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="sumber">Sumber Income</label>
                                    <input type="text" class="form-control" name="sumber" id="sumber">
                                </div>

                                <div class="form-group">
                                    <label for="ket"><b>Keterangan</b></label>
                                    <textarea name="keterangan" class="form-control" id="ket" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary float-right"><i class="icofont-paper-plane"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="outcome" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5" id="exampleModalLabel"><i class="icofont-pencil-alt-2"></i> Tambah Outcome</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/keuangan/outcome'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row  justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nama-i">Nominal</label>
                                    <input type="number" class="form-control" name="nominal" id="nama-i" placeholder="Rp. " required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="ket"><b>Keterangan</b></label>
                                    <textarea name="keterangan" class="form-control" id="ket" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary float-right"><i class="icofont-paper-plane"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end modal tambah data -->
<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>

<?= $this->endSection(); ?>