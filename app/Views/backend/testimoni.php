<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>
<?php helper('global'); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Testimoni tentang YARUTHAB </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Testimoni</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($testimoni as $k) : ?>
                            <tr>
                                <td>
                                    <img id="img-d" src="<?= base_url('assets'); ?>/img/uploads/testimoni/<?= $k['img']; ?>" alt="" width="50" height="50" class="img-circle" style="object-fit:cover;">
                                </td>
                                <td><?= $k['nama']; ?></td>
                                <td><?= $k['status']; ?></td>
                                <td><?= $k['testimoni']; ?></td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-sm-12 col-lg-6">
                                            <?php if ($k['is_confirm'] == 1) : ?>
                                                <a href="<?= base_url('/testimoni/konfirmasi'); ?>/<?= $k['id']; ?>" class="btn btn-sm btn-primary mt-1"><i class="far fa-eye"></i> Ditampilkan</a>
                                            <?php else : ?>
                                                <a href="<?= base_url('/testimoni/konfirmasi'); ?>/<?= $k['id']; ?>" class="btn btn-sm btn-warning mt-1"><i class="far fa-eye-slash"></i>Tidak ditampilkan</a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <a href="<?= base_url('/testimoni'); ?>/<?= $k['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i> Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Testimoni</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>