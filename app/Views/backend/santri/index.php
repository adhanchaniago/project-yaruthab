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
                            <th>Rumah tahfidz</th>
                            <th>Tgl. Mendaftar</th>
                            <th>Wali santri</th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($santri as $s) : ?>
                            <tr>
                                <td><a href="" data-toggle="modal" data-id="<?= $s['id'] ?>" class="tombol-detail" data-target="#modalProfile"><?= $s['nama']; ?></a></td>
                                <td> <?= $s['rt']; ?></td>
                                <td> <?= $s['tgl_daftar']; ?></td>
                                <td><?= $s['ortu']; ?></td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="https://wa.me/<?= $s['no_hp']; ?>" target="blank" class="btn btn-sm btn-success mt-1"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/santri/edit'); ?>/<?= $s['id']; ?>" class="btn btn-sm btn-warning mt-1"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/santri'); ?>/<?= $s['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
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
                            <th>Rumah tahfidz</th>
                            <th>Tgl. Mendaftar</th>
                            <th>Wali santri</th>
                            <th><b>Action</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal tambah data -->
<div class="modal fade" id="tambahPG" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/santri'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="nama-i">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Nama santri" required autocomplete="off">
                            </div>
                            <div class="col-6">
                                <label for="wali-i">Nama Wali Santri</label>
                                <input type="text" class="form-control" name="wali" id="wali-i" placeholder="Nama wali santri" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label>Rumah Tahfidz</label>
                                <select class="select2bs4" name="rt" id="rt-i" data-placeholder="Pilih Rumah Tahfidz" style="width: 100%;">
                                    <option value="" selected>Pilih Rumah Tahfidz</option>
                                    <?php for ($i = 0; $i < count($rt); $i++) : ?>
                                        <option><?= $rt[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="tgl">Tanggal Mendaftar</label>
                                <input type="date" class="form-control" name="tgl" id="tgl" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label for="no-i">Nomor telepon wali santri</label>
                                <input type="number" class="form-control" name="no" id="no-i" placeholder="08xxx" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="alamat-i">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat-i" rows="4" required></textarea>
                        </div>
                        <div class="col">
                            <label for="gambar-i">Foto</label>
                            <input type="file" class="dropify" name="gambar" id="gambar-i" data-height="95" data-max-file-size="1M" data-allowed-file-extensions="jpg jpeg png" />
                        </div>
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

<!-- modal detail pengajar -->


<!-- Modal -->
<div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><b>YARUTHAB</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">

                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead " id="nama-d"><b>Nicole Pearson</b></h2>
                                <ul class="fa-ul" style="margin-left: 0;">
                                    <li>
                                        <b class="text-muted text-sm">Santri di : </b>
                                        <span class="text-muted text-sm" id="rt-d"> Web Designer / UX / Graphic Artist / Coffee Lover </span>
                                    </li>
                                    <li>
                                        <b class="text-muted text-sm">Tanggal Pendaftaran : </b>
                                        <span class="text-muted text-sm" id="tanggal-d"> Web Designer / UX / Graphic Artist / Coffee Lover </span>
                                    </li>
                                    <li>
                                        <b class="text-muted text-sm">Wali Santri : </b>
                                        <span class="text-muted text-sm" id="wali-d"> Web Designer / UX / Graphic Artist / Coffee Lover </span>
                                    </li>
                                </ul>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small">
                                        <span class="fa-li">
                                            <i class="fas fa-building"></i>
                                        </span> Alamat : <span id="alamat-d"> Demo Street 123, Demo City 04312, NJ</span>
                                    </li>
                                    <li class="small">
                                        <span class="fa-li">
                                            <i class="fas fa-phone"></i>
                                        </span> Nomor HP : + <span id="no-d"> 800 - 12 12 23 52</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img id="img-d" src="<?= base_url('assets'); ?>/img/uploads/profile/profile.png" alt="" width="100" height="100" class="img-circle" style="object-fit:cover;">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" id="wa-d" class="btn btn-sm bg-teal">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="far fa-times-circle"></i> Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>
<script>
    $('.tombol-detail').on('click', function() {
        const id = $(this).data('id');
        $.ajax({
            url: '<?= base_url('/detailSantri'); ?>/' + id,
            data: {
                id: id
            },
            method: 'get',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama-d').html(data.nama);
                $('#rt-d').html(data.rt);
                $('#no-d').html(data.no_hp);
                $('#alamat-d').html(data.alamat);
                $('#tanggal-d').html(data.tgl_daftar);
                $('#wali-d').html(data.ortu);
                $('#img-d').attr('src',
                    '<?= base_url('assets'); ?>/img/uploads/profile/' + data
                    .img);
                $("#wa-d").attr("href", "https://wa.me/" + data.no_hp);
            }
        });
    });
</script>
<?= $this->endSection(); ?>