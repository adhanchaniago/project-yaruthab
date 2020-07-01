<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('/epengurus'); ?>/<?= $pengurus['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label for="nama-i">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Nama pengurus" value="<?= $pengurus['nama']; ?>" required autocomplete="off">
                        </div>
                        <div class="col-6">
                            <label>Jabatan</label>
                            <select class="select2bs4" name="jabatan" id="jabatan-i" data-placeholder="Pilih jabatan" style="width: 100%;">
                                <!-- <option value="" selected>Pilih Jabatan</option> -->
                                <?php for ($i = 0; $i < count($jabatan); $i++) : ?>
                                    <option value="<?= $pengurus['jabatan']; ?>" selected><?= $pengurus['jabatan']; ?></option>
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
                            <input type="number" value="<?= $pengurus['no_hp']; ?>" class="form-control" name="no" id="no-i" placeholder="08xxx" required autocomplete="off">
                        </div>
                        <div class="col-6">
                            <label for="email-i">Email</label>
                            <input type="email" value="<?= $pengurus['email']; ?>" class="form-control" name="email" id="email-i" placeholder="someone@example.com">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>SosMed</label>
                    <small class="text-danger">
                        <i>* Isi dengan link dari profile sosial media jika ada.</i>
                    </small>
                    <div class="row">
                        <div class="col-4">
                            <input type="text" name="fb" id="fb" value="<?= $pengurus['facebook']; ?>" autocomplete="off" placeholder="facebook" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="text" name="tw" id="tw" value="<?= $pengurus['twitter']; ?>" autocomplete="off" placeholder="twitter" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="text" name="ig" id="ig" value="<?= $pengurus['instagram']; ?>" autocomplete="off" placeholder="instagram" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="alamat-i">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat-i" rows="4" required><?= $pengurus['alamat']; ?></textarea>
                    </div>
                    <div class="col">
                        <label for="gambar-i">Foto</label>
                        <input type="file" class="dropify" name="gambar" id="gambar-i" data-height="95" data-max-file-size="1M" data-allowed-file-extensions="jpg jpeg png" data-default-file="<?= base_url('assets'); ?>/img/uploads/profile/<?= $pengurus['img']; ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group ml-3">
                <a href="<?= base_url('/pengurus'); ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>