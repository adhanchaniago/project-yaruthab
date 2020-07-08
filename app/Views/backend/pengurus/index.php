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
                            <th>Jabatan</th>
                            <th>SosMed</th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pengurus as $p) : ?>
                            <tr>
                                <td><a href="" data-toggle="modal" data-id="<?= $p['id'] ?>" class="tombol-detail" data-target="#modalProfile"><?= $p['nama']; ?></a></td>
                                <td> <?= $p['jabatan']; ?></td>
                                <td class="text-center">
                                    <a target="blank" href="https://facebook.com/<?= $p['facebook']; ?>" class="btn btn-sm btn-primary <?= $p['facebook'] == "" ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a target="blank" href="https://twitter.com/<?= $p['twitter']; ?>" class="btn btn-sm btn-info <?= $p['twitter'] == "" ? 'disabled' : ''; ?>"><i class="fab fa-twitter"></i></a>
                                    <a target="blank" href="https://instagram.com/<?= $p['instagram']; ?>" class="btn btn-sm btn-primary <?= $p['instagram'] == "" ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                </td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="https://wa.me/<?= $p['no_hp']; ?>" target="blank" class="btn btn-sm btn-success mt-1"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/pengurus/'); ?>/<?= $p['id']; ?>" class="btn btn-sm btn-warning mt-1"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/hpengurus'); ?>/<?= $p['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
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
                            <th>Jabatan</th>
                            <th>SosMed</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengurus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/pengurus'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="nama-i">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Nama pengurus" required autocomplete="off">
                            </div>
                            <div class="col-6">
                                <label>Jabatan</label>
                                <select class="select2bs4" name="jabatan" id="jabatan-i" data-placeholder="Pilih jabatan" style="width: 100%;">
                                    <!-- <option value="" selected>Pilih Jabatan</option> -->
                                    <?php for ($i = 0; $i < count($jabatan); $i++) : ?>
                                        <option><?= $jabatan[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="no-i">Nomor telepon</label>
                                <input type="number" class="form-control" name="no" id="no-i" placeholder="08xxx" required autocomplete="off">
                            </div>
                            <div class="col-6">
                                <label for="email-i">Email</label>
                                <input type="email" class="form-control" name="email" id="email-i" placeholder="someone@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>SosMed</label>
                        <small class="text-danger">
                            <i>* Isi dengan <b>usernamenya saja</b> dari profile sosial media jika ada.</i>
                        </small>
                        <img src="<?= base_url('assets/img/konten/nick.PNG'); ?>" alt="">
                        <p></p>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="fb" id="fb" autocomplete="off" placeholder="facebook" class="form-control">
                            </div>
                            <div class="col-4">
                                <input type="text" name="tw" id="tw" autocomplete="off" placeholder="twitter" class="form-control">
                            </div>
                            <div class="col-4">
                                <input type="text" name="ig" id="ig" autocomplete="off" placeholder="instagram" class="form-control">
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
                            <input type="file" class="dropify" name="gambar" id="gambar-i" data-height="95" data-allowed-file-extensions="jpg jpeg png" />
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
                <h5 class="modal-title" id="exampleModalLabel"><b>YARUTHAB</b></h5>
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
                                <h2 class="lead" id="nama-d"><b>Nicole Pearson</b></h2>
                                <b class="text-muted text-sm">Jabatan : </b>
                                <p class="text-muted text-sm" id="jabatan-d"> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small">
                                        <span class="fa-li">
                                            <i class="fas fa-at"></i>
                                        </span> E-mail : <span id="email-d"> Demo Street 123, Demo City 04312, NJ</span>
                                    </li>
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
                            <a target="blank" id="fb-d" href="#" class="btn btn-sm btn-primary"><i class="fab fa-facebook"></i></a>
                            <a target="blank" id="tw-d" href="#" class="btn btn-sm btn-info"><i class="fab fa-twitter"></i></a>
                            <a target="blank" id="ig-d" href="#" class="btn btn-sm btn-primary"><i class="fab fa-instagram"></i></a>
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
    $('.tombol-edit').on('click', function() {
        const id = $(this).data('id');
        $('.modal-content form').attr('action', '<?= base_url('/pengurus'); ?>/' + id);
        $('.modal-title').html("Edit Data Pengurus");
        $.ajax({
            url: '<?= base_url('Pengurus/getDataById'); ?>/' + id,
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama-i').val(data.nama);
                $('#jabatan-i').val(data.jabatan);
                $('#no-i').val(data.no_hp);
                $('#alamat-i').val(data.alamat);
                $('#email-i').val(data.email);
                $('#gambar-i').data('data-default-file',
                    '<?= base_url('assets'); ?>/img/uploads/profile/' + data
                    .img).attr('data-default-file',
                    '<?= base_url('assets'); ?>/img/uploads/profile/' + data
                    .img);
                $("#fb").val(data.facebook);
                $("#tw").val(data.twitter);
                $("#ig").val(data.instagram);

            }
        });
    });
    $('.tombol-tambah').on('click', function() {
        $('.modal-title').html("Tambah Data Pengurus");
        $('#nama-i').val("");
        $('#jabatan-i').val("");
        $('#no-i').val("");
        $('#alamat-i').val("");
        $('#email-i').val("");

        $("#fb").val('');
        $("#tw").val('');
        $("#ig").val('');

    });
    $('.tombol-detail').on('click', function() {
        const id = $(this).data('id');
        $.ajax({
            url: '<?= base_url('Pengurus/getDataById'); ?>/' + id,
            data: {
                id: id
            },
            method: 'get',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama-d').html(data.nama);
                $('#jabatan-d').html(data.jabatan);
                $('#no-d').html(data.no_hp);
                $('#alamat-d').html(data.alamat);
                $('#email-d').html(data.email);
                $('#img-d').attr('src',
                    '<?= base_url('assets'); ?>/img/thumbnail/thumb_' + data
                    .img);
                $("#wa-d").attr("href", "https://wa.me/" + data.no_hp);
                if (data.facebook == "") {
                    $("#fb-d").addClass("disabled");
                } else {
                    $("#fb-d").removeClass("disabled");
                }
                if (data.twitter == "") {
                    $("#tw-d").addClass("disabled");
                } else {
                    $("#tw-d").removeClass("disabled");
                }
                if (data.instagram == "") {
                    $("#ig-d").addClass("disabled");
                } else {
                    $("#ig-d").removeClass("disabled");
                }
                $("#fb-d").attr("href", data.facebook);
                $("#tw-d").attr("href", data.twitter);
                $("#ig-d").attr("href", data.instagram);
            }
        });
    });
</script>
<?= $this->endSection(); ?>