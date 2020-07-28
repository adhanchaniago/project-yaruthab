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
                    <a href="<?= base_url(); ?>" data-toggle="modal" data-target="#donasiUang" class="btn btn-primary tombol-tambah"><i class="fas fa-plus"></i> Donasi Uang</a>
                    <a href="<?= base_url(); ?>" data-toggle="modal" data-target="#donasiBarang" class="btn btn-secondary tombol-tambah"><i class="fas fa-plus"></i> Donasi Barang</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Besaran</th>
                            <th>Tgl. Donasi</th>
                            <th class="text-center">Status</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($donasi as $d) : ?>
                            <tr>
                                <td><?= $d['nama']; ?></td>
                                <td><?= $d['nominal'] ? "Uang" : $d['barang']; ?></td>
                                <td><?= $d['nominal'] ? $d['nominal'] : $d['jumlah']; ?></td>
                                <td><?= $d['tgl'] ? date_indo($d['tgl']) : ""; ?></td>
                                <td class="text-center">
                                    <?php if ($d['konfirmasi_donasi'] == 1) : ?>
                                        <?php $d['konfirmasi_donasi'] = "Terkonfirmasi"; ?>
                                        <span class="badge badge-primary"><?= $d['konfirmasi_donasi']; ?></span>
                                    <?php else : ?>
                                        <?php $d['konfirmasi_donasi'] = "Belum Terkonfirmasi"; ?>
                                        <a href="<?= base_url('/donatur/konfirmasi'); ?>/<?= $d['id_donasi']; ?>">
                                            <span class="badge badge-warning"><?= $d['konfirmasi_donasi']; ?></span>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-6">
                                            <a href="https://wa.me/<?= $d['no_hp']; ?>" target="blank" class="btn btn-sm btn-success mt-1"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <a href="<?= base_url('/donatur/donasi'); ?>/<?= $d['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Besaran</th>
                            <th>Tgl. Donasi</th>
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
<div class="modal fade" id="donasiUang" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5" id="exampleModalLabel"><i class="icofont-pencil-alt-2"></i> donasi uang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/donasi/add'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row  justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nama-i">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Masukkan nama Anda" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="nominal-i">Nominal Donasi</label>
                                    <input type="number" class="form-control" name="nominal" id="nominal-i" placeholder="Rp. " required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="email-i">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email-i" placeholder="someone@example.com">
                                </div>

                                <div class="form-group">
                                    <label for="no-i">No. Handphone / whatsapp</label>
                                    <input type="number" class="form-control" name="no_hp" id="no-i" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="alamat-i"><b>Alamat</b></label>
                                    <textarea name="alamat" class="form-control" id="alamat-i" rows="5"></textarea>
                                </div>
                                <input type="hidden" name="konfirmasi" value="1">
                                <button type="submit" class="btn btn-primary float-right"><i class="icofont-paper-plane"></i> Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <small class="m-auto">Harap isi dengan data yang valid</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="donasiBarang" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5" id="exampleModalLabel"><i class="icofont-pencil-alt-2"></i>donasi barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/donasi/barang'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row  justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nama-i">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Masukkan nama Anda" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="jenis">Jenis Barang</label>
                                    <input type="text" class="form-control" name="jenis" id="jenis" required autocomplete="on">
                                </div>

                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" required autocomplete="on">
                                </div>

                                <div class="form-group">
                                    <label for="email-i">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email-i" placeholder="someone@example.com">
                                </div>

                                <div class="form-group">
                                    <label for="no-i">No. Handphone / whatsapp</label>
                                    <input type="number" class="form-control" name="no_hp" id="no-i" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="alamat-i"><b>Alamat</b></label>
                                    <textarea name="alamat" class="form-control" id="alamat-i" rows="3"></textarea>
                                </div>
                                <input type="hidden" name="konfirmasi" value="1">
                                <button type="submit" class="btn btn-primary float-right"><i class="icofont-paper-plane"></i> Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <small class="m-auto">Harap isi dengan data yang valid</small>
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