<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('/santri'); ?>/<?= $santri['id']; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_wali" value="<?= $santri['wali_id']; ?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="nama-i">Nama</label>
                        <input value="<?= $santri['nama']; ?>" type="text" class="form-control" name="nama" id="nama-i" placeholder="Nama santri" required autocomplete="off">
                    </div>
                    <div class="col-6">
                        <label for="wali-i">Nama Wali Santri</label>
                        <input value="<?= $santri['ortu']; ?>" type="text" class="form-control" name="wali" id="wali-i" placeholder="Nama wali santri" required autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Rumah Tahfidz</label>
                        <select class="select2bs4" name="rt" id="rt-i" data-placeholder="Pilih Rumah Tahfidz" style="width: 100%;">
                            <?php for ($i = 0; $i < count($rt); $i++) : ?>
                                <?php if ($santri['rt'] == $rt[$i]) : ?>
                                    <option selected><?= $rt[$i]; ?></option>
                                <?php else : ?>
                                    <option><?= $rt[$i] ?></option>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="tgl">Tanggal Mendaftar</label>
                        <input type="date" value="<?= $santri['tgl_daftar']; ?>" class="form-control" name="tgl" id="tgl" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <label for="no-i">Nomor telepon wali santri</label>
                        <input type="number" value="<?= $santri['no_hp']; ?>" class="form-control" name="no" id="no-i" placeholder="08xxx" required autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="alamat-i">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat-i" rows="4" required><?= $santri['alamat']; ?></textarea>
                </div>
                <div class="col">
                    <label for="gambar-i">Foto</label>
                    <input type="file" class="dropify" name="gambar" id="gambar-i" data-height="95" data-max-file-size="1M" data-default-file="<?= base_url('assets'); ?>/img/uploads/profile/<?= $santri['img']; ?>" data-allowed-file-extensions="jpg jpeg png" />
                </div>
            </div>
            <div class="form-group"></div>
            <a href="/santri" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>