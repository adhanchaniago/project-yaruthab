<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>

<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Donatur </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. Hp</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($donatur as $d) : ?>
                            <tr>
                                <td><?= $d['nama']; ?><?= $d['is_confirm'] == 0 ? '<span class="badge badge-danger float-right">' . 'Belum terkonfirmasi' . '</span>' : ""; ?></td>
                                <td> <?= $d['alamat']; ?></td>
                                <td> <?= $d['email']; ?></td>
                                <td> <?= $d['no_hp']; ?></td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-6">
                                            <a href="https://wa.me/<?= $d['no_hp']; ?>" target="blank" class="btn btn-sm btn-success mt-1"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <a href="<?= base_url('/donatur'); ?>/<?= $d['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. Hp</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- end modal tambah data -->
<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>

<?= $this->endSection(); ?>