<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>
<?php helper('global'); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url(); ?>" data-toggle="modal" data-target="#tambahPG" class="btn btn-primary tombol-tambah"><i class="fas fa-plus"></i> Tambah Data</a> </h3>
                <div class="text-right">
                    <a href="/kegiatan/print" class="btn btn-outline-danger"><i class="fas fa-print"></i> Print Data</a>
                    <a href="/kegiatan/excel" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Export Excel</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Tgl Pelaksanaan</th>
                            <th>tempat</th>
                            <th>Penanggung Jawab</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kegiatan as $k) : ?>
                            <tr>
                                <td><?= $k['nama']; ?></td>
                                <td> <?= longdate_indo($k['tgl_pelaksanaan']); ?></td>
                                <td><?= $k['tempat']; ?></td>
                                <td><?= $k['pj']; ?></td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-3">
                                            <a href="<?= base_url('/kegiatan/galeri'); ?>/<?= $k['id']; ?>" class="btn btn-sm btn-danger mt-1"><i class="far fa-images"></i> Images</a>
                                        </div>
                                        <div class="col-sm-12 col-lg-3">
                                            <?php if ($k['is_tampil'] == 1) : ?>
                                                <a href="<?= base_url('/kegiatan/tampil'); ?>/<?= $k['id']; ?>" class="btn btn-sm btn-primary mt-1"><i class="far fa-eye"></i> Tampil</a>
                                            <?php else : ?>
                                                <a href="<?= base_url('/kegiatan/tampil'); ?>/<?= $k['id']; ?>" class="btn btn-sm btn-primary mt-1"><i class="far fa-eye-slash"></i>Tidak Tampil</a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-12 col-lg-3">
                                            <a href="" class="btn btn-sm btn-warning mt-1 tombol-edit" data-toggle="modal" data-id="<?= $k['id']; ?>" data-target="#tambahPG"><i class="fas fa-edit"></i> Edit</a>
                                        </div>
                                        <div class="col-sm-12 col-lg-3">
                                            <a href="<?= base_url('/kegiatan'); ?>/<?= $k['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i> Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Tgl Pelaksanaan</th>
                            <th>tempat</th>
                            <th>Penanggung Jawab</th>
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
            <form action="<?= base_url('/kegiatan'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="nama-i">Kegiatan</label>
                                <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Nama kegiatan" required autocomplete="off">
                            </div>
                            <div class="col-6">
                                <label for="pj-i">Pen. Jawab</label>
                                <input type="text" class="form-control" name="pj" id="pj-i" placeholder="Penanggung jawab" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl-i">Tanggal Penyelenggaraan</label>
                        <input type="date" class="form-control" name="tgl" id="tgl-i" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="tempat-i">Tempat</label>
                        <input type="text" class="form-control" name="tempat" id="tempat-i" placeholder="Tempat kegiatan" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-i">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi-i" rows="8"></textarea>
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
<script>
    $('.tombol-edit').on('click', function() {
        const id = $(this).data('id');
        $('.modal-content form').attr('action', '<?= base_url('/kegiatan'); ?>/' + id);
        $('.modal-title').html("Edit Data kegiatan");
        $.ajax({
            url: '<?= base_url('Kegiatan/getDataById'); ?>/' + id,
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama-i').val(data.nama);
                $('#tgl-i').val(data.tgl_pelaksanaan);
                $('#tempat-i').val(data.tempat);
                $('#deskripsi-i').val(data.deskripsi);
                $('#pj-i').val(data.pj);
            }
        });
    });
    $('.tombol-tambah').on('click', function() {
        $('.modal-title').html("Edit Data kegiatan");
        $('#nama-i').val('');
        $('#tgl-i').val('');
        $('#tempat-i').val('');
        $('#deskripsi-i').val('');
        $('#pj-i').val('');
    });
</script>
<?= $this->endSection(); ?>