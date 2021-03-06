<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="flash-data" data-flashdata="<?= session()->getFlashdata('error'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url(); ?>" data-toggle="modal" data-target="#tambahRT" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> </h3>
                <div class="text-right">
                    <a href="<?= base_url('/rumahtahfid/print'); ?>" class="btn btn-outline-danger"><i class="fas fa-print"></i> Print Data</a>
                    <a href="/RumahTahfidz/excel" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Export Excel</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Rumah Tahfidz</th>
                            <th>Pembina</th>
                            <th>Alamat</th>
                            <th>Jml. Pendidik/Santri</th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rumahtahfid as $r) : ?>
                            <tr>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['pembina']; ?></td>
                                <td><?= $r['alamat']; ?></td>
                                <td>
                                    <?php
                                    $db = \Config\Database::connect();
                                    // HITUNG JUMLAH PENGAJAR
                                    $rt_id = $r['id'];
                                    $n = $db->query("SELECT COUNT(`id_pengajar`) AS `n` FROM `mengajar` WHERE `id_rt`= $rt_id")->getRowArray();
                                    // HITUNG JUMLAH SANTRI
                                    $ns = $db->query("SELECT COUNT(`id`) AS `n` FROM `santri` WHERE `rt_id`= $rt_id")->getRowArray();
                                    echo $n['n'] . ' / ' . $ns['n'];
                                    // dd($n);
                                    ?>
                                </td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="https://wa.me/<?= $r['no_telp']; ?>" target="blank" class="btn btn-sm btn-success mt-1"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/erumahtahfid'); ?>/<?= $r['id']; ?>" data-toggle="modal" data-target="#tambahRT" data-id="<?= $r['id'] ?>" class="btn btn-sm btn-warning mt-1 edit-rt"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <a href="<?= base_url('/hrumahtahfid'); ?>/<?= $r['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rumah Tahfidz</th>
                            <th>Pembina</th>
                            <th>Alamat</th>
                            <th>Jml. Pendidik/Santri</th>
                            <th><b>Action</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="tambahRT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rumah Tahfidz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/rumahtahfid'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Rumah Tahfidz</label>
                        <input type="text" class="form-control" name="nama" id="nama_rt" placeholder="Nama Rumah Tahfidz" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="pembina">Pimpinan / pembina</label>
                        <input type="text" class="form-control" name="pembina" id="pembina_rt" placeholder="Pembina/pimpinan Rumah Tahfidz" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="pembina">Nomor telepon pembina / rumah tahfidz</label>
                        <input type="number" class="form-control" name="no" id="no_rt" placeholder="08xxx" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat_rt" rows="3" required></textarea>
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
<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>
<script>
    $('.edit-rt').on('click', function() {
        const id = $(this).data('id');
        $('.modal-content form').attr('action', '<?= base_url('/erumahtahfid'); ?>/' + id);
        $('.modal-title').html("Edit Jadwal Imam/Muadzin");
        $.ajax({
            url: '<?= base_url('RumahTahfidz/getDataById'); ?>/' + id,
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama_rt').val(data.nama);
                $('#pembina_rt').val(data.pembina);
                $('#no_rt').val(data.no_telp);
                $('#alamat_rt').val(data.alamat);
            }
        });
    });
</script>
<?= $this->endSection(); ?>