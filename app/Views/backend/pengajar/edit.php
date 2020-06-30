<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('/epengajar'); ?>/<?= $pengajar['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" value="<?= $pengajar['nama']; ?>" class="form-control" name="nama" id="nama_pg" placeholder="Ustadz / Ustadzah ..." required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Tempat mengajar</label>
                <select class="select2bs4" name="tempat[]" id="rt" multiple="multiple[]" data-placeholder="Pilih rumah tahfidz" style="width: 100%;">
                    <?php foreach ($nama_rt as $rts) : ?>
                        <option selected><?= $rts['nama']; ?> </option>
                    <?php endforeach; ?>
                    <?php foreach ($rt_lain as $r) : ?>
                        <option><?= $r['nama']; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="form-group">
                <label for="pembina">Nomor telepon</label>
                <input type="number" value="<?= $pengajar['no_hp']; ?>" class="form-control" name="no" id="no_pg" placeholder="08xxx" required autocomplete="off">
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat_pg" rows="4" required><?= $pengajar['alamat']; ?></textarea>
                </div>
                <div class="col">
                    <label for="gambar">Foto</label>
                    <input type="file" class="dropify" name="gambar" id="gambar" data-height="95" data-max-file-size="2M" data-default-file="<?= base_url('assets'); ?>/img/uploads/profile/<?= $pengajar['img']; ?>" data-allowed-file-extensions="jpg jpeg png" />
                </div>
            </div>
            <div class="form-group"></div>
            <a href="<?= base_url('/pengajar'); ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>