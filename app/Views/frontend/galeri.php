<?= $this->extend('layout/template'); ?>

<?= $this->section('nav'); ?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-start">
            <h1 class="logo"><a href="<?= base_url('/'); ?>">Yaruthab</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= base_url('/'); ?>" class="logo"><img src="<?= base_url('assets') ?>/img/logo1.png" alt="" class="img-fluid"></a>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="<?= base_url('/rt'); ?>">Rumah Tahfidz</a></li>
                <li><a href="<?= base_url('/pesantren'); ?>">Pesantren Tahfidz</a></li>
                <li><a href="<?= base_url('/doc'); ?>">Formulir dan Dokumen lain</a></li>
                <li><a href="#donasi">Donasi</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        <a href="" data-toggle="modal" data-target="#MyModal" class="get-started-btn scrollto"> <i class="icofont-basket"></i> Ya Store</a>
    </div>
</header><!-- End Header -->
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Detail kegiatan</h2>
            <ol>
                <li><a href="<?= base_url(''); ?>">Home</a></li>
                <li>Detail Kegiatan</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details ">
    <div class="container">

        <div class="portfolio-details-container">

            <div class="  owl-carousel portfolio-details-carousel pt-4">
                <?php foreach ($galeri as $g) : ?>
                    <img src="<?= base_url('assets'); ?>/img/uploads/galeri/<?= $g['img']; ?>" class="img-details" alt="<?= $g['img']; ?>">
                <?php endforeach; ?>
            </div>

            <div class="portfolio-info">
                <h3>Galeri Kegiatan</h3>
                <ul>
                    <li><strong>Kegiatan</strong>: <?= $galeri[0]['nama']; ?></li>
                    <li><strong>Tanggal kegiatan</strong>: <?= $galeri[0]['tgl_pelaksanaan']; ?></li>
                    <li><strong>Tempat kegiatan</strong>: <?= $galeri[0]['tempat']; ?></li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <div class=" section-title">
                <h2>Deskripsi kegiatan</h2>
                <p><?= $galeri[0]['nama']; ?></p>
            </div>
            <p class="text-justify" style="margin-top:-30px;">
                <?= $galeri[0]['deskripsi']; ?>
            </p>
        </div>

    </div>
</section><!-- End Portfolio Details Section -->
<?= $this->endSection(); ?>