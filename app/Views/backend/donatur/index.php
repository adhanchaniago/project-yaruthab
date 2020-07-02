<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>

<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Donatur</h3>
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
                            <th class="text-center">Status</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($donatur as $d) : ?>
                            <tr>
                                <td><?= $d['nama']; ?></td>
                                <td> <?= $d['alamat']; ?></td>
                                <td> <?= $d['email']; ?></td>
                                <td> <?= $d['no_hp']; ?></td>
                                <td class="text-center"> <?php if ($d['is_confirm'] == 1) : ?>
                                        <?php $d['is_confirm'] = "Terkonfirmasi"; ?>
                                        <a href="<?= base_url('/donatur/konfirmasi'); ?>/<?= $d['id']; ?>" class="btn disabled">
                                            <span class="badge badge-primary"><?= $d['is_confirm']; ?></span>
                                        </a>
                                    <?php else : ?>
                                        <?php $d['is_confirm'] = "Belum Terkonfirmasi"; ?>
                                        <a href="<?= base_url('/donatur/konfirmasi'); ?>/<?= $d['id']; ?>">
                                            <span class="badge badge-warning"><?= $d['is_confirm']; ?></span>
                                        </a>
                                    <?php endif; ?></td>
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
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. Hp</th>
                            <th class="text-center">Status</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>

<?= $this->endSection(); ?>