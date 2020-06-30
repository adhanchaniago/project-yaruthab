<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url(); ?>" data-toggle="modal" data-target="#tambahPG" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Rumah tahfidz</th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($pengajar as $p) : ?>
                            <tr>
                                <td><a href="" data-toggle="modal" data-id="<?= $p['id'] ?>" class="tombol-detail" data-target="#modalProfile"><?= $p['nama']; ?></a></td>
                                <td><?= $p['alamat']; ?></td>
                                <td>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $id = $p['id'];
                                    $data = $db->table('rumah_tahfid')
                                        ->select('rumah_tahfid.nama as nama')
                                        ->join('mengajar', 'rumah_tahfid.id = mengajar.id_rt')->getWhere(['mengajar.id_pengajar' => $id])->getResultArray();
                                    $i = 1;
                                    $x = count($data);
                                    foreach ($data as $r) {

                                        if ($i < $x) {
                                            echo $r['nama'] . ', ';
                                        } else {
                                            echo $r['nama'];
                                        }

                                        $i++;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="https://wa.me/<?= $p['no_hp']; ?>" target="blank" class="btn btn-sm btn-success mt-1"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/pengajar/'); ?>/<?= $p['id']; ?>" class="btn btn-sm btn-warning mt-1 tombol-edit"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/hpengajar'); ?>/<?= $p['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
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
                            <th>Rumah tahfidz</th>
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengajar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/pengajar'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama_pg" placeholder="Ustadz / Ustadzah ..." required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="pembina">Nomor telepon</label>
                        <input type="number" class="form-control" name="no" id="no_pg" placeholder="08xxx" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Tempat mengajar</label>
                        <select class="select2bs4" name="tempat[]" id="rt" multiple="multiple[]" data-placeholder="Pilih rumah tahfidz" style="width: 100%;">
                            <?php for ($i = 0; $i < count($rt); $i++) : ?>
                                <option><?= $rt[$i] ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat_pg" rows="4" required></textarea>
                        </div>
                        <div class="col">
                            <label for="gambar">Foto</label>
                            <input type="file" class="dropify" name="gambar" id="gambar" data-height="95" data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png" />
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
                        Detail data pengajar
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead" id="nama-d"><b>Nicole Pearson</b></h2>
                                <b class="text-muted text-sm">Tempat Mengajar : </b>
                                <p class="text-muted text-sm" id="tempat-d"> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat : <span id="alamat-d"> Demo Street 123, Demo City 04312, NJ</span></li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Nomor HP : + <span id="no-d"> 800 - 12 12 23 52</span></li>
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
    $('.tombol-edit').on('click', function() {
        const id = $(this).data('id');
        $('.modal-content form').attr('action', '<?= base_url('/epengajar'); ?>/' + id);
        $('.modal-title').html("Edit Data Pengajar");
        $.ajax({
            url: '<?= base_url('Pengajar/getDataById'); ?>/' + id,
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama_pg').val(data.nama);
                $('#rt').val(data.rt_id);
                $('#no_pg').val(data.no_hp);
                $('#alamat_pg').val(data.alamat);

            }
        });
    });
    $('.tombol-detail').on('click', function() {
        const id = $(this).data('id');
        $('.modal-content form').attr('action', '<?= base_url('/epengajar'); ?>/' + id);
        $.ajax({
            url: '<?= base_url('Pengajar/getDataById'); ?>/' + id,
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama-d').html(data.nama);
                $('#tempat-d').html(data.mengajar);
                $('#no-d').html(data.no_hp);
                $('#alamat-d').html(data.alamat);
                $('#img-d').attr('src',
                    '<?= base_url('assets'); ?>/img/uploads/profile/' + data
                    .img);
                $("#wa-d").attr("href", "https://wa.me/" + data.no_hp);
            }
        });
    });
</script>
<?= $this->endSection(); ?>