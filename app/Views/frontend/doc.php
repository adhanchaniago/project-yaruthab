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

        <a href="" data-toggle="modal" data-target="#MyModal" class="get-started-btn scrollto"> <i class="icofont-basket"></i> Ya Store</a>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero-dok">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <h1>Unduh dokumen / formulir</h1>
            <h2>Registrasi Rumah Tahfidz, Ujian, Santri, Sertifikat, & Formulir Lainnya</h2>
            <div class="d-flex">
                <a href="#unduh" class="btn-get-started scrollto">Mulai Unduhan</a>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<main id="main">

    <!-- ======= Visi Misi ======= -->
    <section id="unduh" class="about-boxes">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <!-- <img src="assets/img/about-boxes-1.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-icon">
                            <i class="ri-article-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Formulir Rumah Tahfidz</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Unduh formulir</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <!-- <img src="assets/img/about-boxes-1.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-icon">
                            <i class="ri-article-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Formulir Ujian Santri</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Unduh formulir</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <!-- <img src="assets/img/about-boxes-1.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-icon">
                            <i class="ri-file-text-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Formulir Lainnya</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Unduh formulir</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <!-- <img src="assets/img/about-boxes-1.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-icon">
                            <i class="ri-profile-fill"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Salinan Sertifikat</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Unduh Sertifikat</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End About Boxes Section -->
    <?= $this->endSection(); ?>