<?= $this->extend('layout/template'); ?>

<?= $this->section('nav'); ?>
<header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-start">
            <h1 class="logo"><a href="<?= base_url('/'); ?>">Yaruthab</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= base_url('/'); ?>" class="logo"><img src="<?= base_url('assets') ?>/img/logo1.png" alt="" class="img-fluid"></a>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="#donasi">Donasi</a></li>
                <li class="drop-down"><a href="">Lainnya</a>
                    <ul>
                        <li><a href="<?= base_url('/rt'); ?>">Rumah Tahfidz</a></li>
                        <li><a href="<?= base_url('/pesantren'); ?>">Pesantren Tahfidz Tahafudzlil Qur'an Hamalatul Qur'an </a></li>
                        <li><a href="<?= base_url('/doc'); ?>">Formulir dan Dokumen lain</a></li>
                    </ul>
                </li>

            </ul>
        </nav><!-- .nav-menu -->

        <a href="#about" class="get-started-btn scrollto"> <i class="icofont-basket"></i> Ya Store</a>

    </div>
</header>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="<?= base_url('assets') ?>/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
                    <img src="<?= base_url('assets') ?>/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
                    <img src="<?= base_url('assets') ?>/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3>Informasi Kegiatan</h3>
                    <ul>
                        <li><strong>Kategori</strong>: NgaOs</li>
                        <li><strong>Partisipan</strong>: RT Company</li>
                        <li><strong>Tanggal kegiatan</strong>: 01 March, 2020</li>
                        <li><strong>Tempat kegiatan</strong>: Jrebeng Kulon</li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>This is an example of portfolio detail</h2>
                <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
                    Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia
                    accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
    <?= $this->endSection(); ?>