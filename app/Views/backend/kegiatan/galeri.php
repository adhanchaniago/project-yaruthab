<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<!-- ======= Portfolio Section ======= -->
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>

<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <p class="h4"> Daftar Foto Kegiatan <?= $kegiatan['nama']; ?></p>
                    <a href="<?= base_url('/kegiatan'); ?>" class="btn btn-secondary mt-2"><i class="bx bx-arrow-back"></i> Kembali</a>
                    <a href="" data-toggle="modal" data-target="#tambah" class="btn btn-primary mt-2"><i class="bx bx-upload"></i> Upload gambar</a>
                </ul>
            </div>
        </div>

        <?php if (count($foto) < 1) : ?>
            <br><br><br>
            <p class="display-3 text-center">Gambar Kosong</p>
        <?php endif; ?>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($foto as $foto) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <?php if (file_exists(FCPATH . "/assets/img/low/low_" . $foto['img'])) : ?>
                        <img src="<?= base_url('assets'); ?>/img/low/low_<?= $foto['img']; ?>" class="img-fluid" alt="">
                    <?php else : ?>
                        <img src="<?= base_url('assets'); ?>/img/uploads/galeri/<?= $foto['img']; ?>" class="img-fluid" alt="">
                    <?php endif; ?>
                    <div class="portfolio-info">
                        <h4><?= $foto['img']; ?></h4>
                        <p><?= $kegiatan['tempat']; ?></p>
                        <a href="<?= base_url('assets'); ?>/img/uploads/galeri/<?= $foto['img']; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?= $foto['img']; ?>"><i class="bx bx-image"></i></a>
                        <a href="<?= base_url('/kegiatan/hapus-foto'); ?>/<?= $foto['id']; ?>" class="details-link" title="Hapus gambar"><i class="bx bx-trash"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- End Portfolio Section -->
<!-- Modal tambah data -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload foto kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/kegiatan/upload'); ?>/<?= $kegiatan['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col">
                        <input type="file" class="dropify" name="gambar[]" multiple id="gambar" data-height="150" data-allowed-file-extensions="jpg jpeg png" />
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
<script src="<?= base_url('assets') ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets') ?>/js/main.js"></script>
<?= $this->endSection(); ?>