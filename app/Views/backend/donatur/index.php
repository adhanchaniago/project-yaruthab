<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>

<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url(); ?>" data-toggle="modal" data-target="#tambahPG" class="btn btn-primary tombol-tambah"><i class="fas fa-plus"></i> Tambah Data</a> </h3>
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
<!-- Modal tambah data -->
<div class="modal fade" id="tambahPG" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data kegiatan baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/donatur/tambahDataByAdmin'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="nama-i">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Nama kegiatan" required autocomplete="off">
                            </div>
                            <div class="col-6">
                                <label for="email-i">Email</label>
                                <input type="email" class="form-control" name="email" id="email-i" placeholder="Someone@example.com" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_hp-i">Nomor HP</label>
                        <input type="number" class="form-control" name="no_hp" id="no_hp-i" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat-i">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat-i" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah data -->
<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>

<?= $this->endSection(); ?>