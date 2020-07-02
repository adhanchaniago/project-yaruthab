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
                <li class="active"><a href="#hero">Home</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#program">Program Kami</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Pengurus</a></li>
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

        <a href="#MyModal" data-toggle="modal" data-target="#MyModal" class="get-started-btn scrollto"> <i class="icofont-basket"></i> Ya Store</a>

    </div>
</header>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <h1>Yayasan Rumah Tahfidz Probolinggo</h1>
        <h2>YARUTHAB</h2>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Perkenalkan</a>
            <a href="https://youtu.be/tXnLPLiLs88" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-end">
                <div class="col-lg-11 col-md-11 col-sm-11">
                    <div class="row justify-content-end">

                        <div class="col-lg-3 col-md-3 col-3 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-ui-home"></i>
                                <span data-toggle="counter-up"><?= $nrt; ?></span>
                                <p>Rumah Tahfid</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-3 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-learn"></i>
                                <span data-toggle="counter-up"><?= $nst; ?></span>
                                <p>Santri</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-3 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="icofont-users-alt-2"></i>
                                <span data-toggle="counter-up"><?= $npg; ?></span>
                                <p>Pendidik</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-3 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class=" icofont-waiter-alt"></i>
                                <span data-toggle="counter-up"><?= $ndn; ?></span>
                                <p>Donatur</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="tentang" class="features">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Perkenalkan</h2>
                <p>Tentang Kami</p>
            </div>
            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-4">
                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                        <i class="ri-history-line"></i>
                        <h4 class="d-none d-lg-block">Latar Belakang</h4>
                    </a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <i class="ri-file-shield-2-line"></i>
                        <h4 class="d-none d-lg-block">Legalitas</h4>
                    </a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <i class="ri-home-heart-fill"></i>
                        <h4 class="d-none d-lg-block">Struktur Organisasi</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">

                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Pendirian Yaruthab</h3>
                            <p>
                                Yayasan Rumah Tahfidz Probolinggo atau disebut Yaruthab, adalah sebuah Yayasan yang berbadan hukum dan terdaftar di Kementerian Hukum dan HAM yang berkhidmat untuk kemaslahatan ummat, terutama dibidang pendidikan Al-Qur’an khususnya pada Tahfidzul Qur’an (menghafal Al-Qur’an).
                            </p>

                            <p>
                                Yayasan ini berdiri atas inisiatif para pengurus dan pengajar rumah tahfidz di Kota dan Kabupaten Probolinggo.
                            </p>
                            <p>
                                Yayasan siap bersinergi dan bekerjasama dengan semua pihak baik lembaga, instansi, perusahaan ataupun perseorangan yang mempunyai itikad baik untuk mewujudkan Visi dan Misi tersebut, serta menempuh berbagai cara untuk menjaga semangat para penghafal Qur’an dengan mencari metode yang tepat, memfasilitasi kenyamanan dalam menghafal, mensejahterakan para pengajar tahfidz, mengadakan kegiatan yang menunjang dan menumbuhkan semangat menghafal santri.
                            </p>
                            <p>
                                Perjuangan ini membutuhkan pengorbanan yang tidak sedikit, baik berupa tenaga, fikiran bahkan materiil.
                                Perjuangan ini akan menjadi lebih mudah jika Kita semua men-sedekah-kan fikiran, ilmu, tenaga, dan sebagian harta kita, tentunya sesuai dengan kemampuan Kita. Ini akan menjadi ladang amal jariyah Kita yang akan Kita tuai di akhirat kelak, amiin.
                                <blockquote class="blockquote">
                                    “Barang siapa yang membantu urusan Allah, niscaya Allah akan membantu urusannya”.
                                </blockquote>

                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/konten/sejarah.png" height="400" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Dokumen Yang Terkait Dengan Pendirian Yaruthab</h3>
                            <ul>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Akta Notaris Rhozy Wirianto, SH.,M.Kn. nomor 04 tanggal 24 Maret 2017.
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i> Surat Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia dengan nomor : AHU-0006042.AH.01.04.Tahun 2017 tanggal 31 Maret 2017
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Surat Keterangan Domisili dari Kelurahan Ketapang nomor : 470/I/20/452.502.3/2016 tanggal 1 September 2016
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Surat Keterangan Terdaftar dari Kantor Pelayanan Pajak Pratama Probolinggo nomor : S-5521KT/WPJ.12/KP.0603/2017 tanggal 17 April 2017, NPWP : 81.769.059.7-625.000 dengan KLU : 94910 Kegiatan Organisasi Keagamaan
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Rekening Bank yang digunakan Bank Syariah Mandiri, Bank Jatim, Bank Muamalat dan Bank Rakyat Indonesia Cabang Probolinggo
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Media sosial yang digunakan Facebook : yaruthab, email : yaruthab@gmail.com dan telepon/WA nomor 0811 33 1167 (Official).
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/konten/dokumen.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-7 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Struktur Organisasi</h3>
                            <dl class="row">
                                <p class="mt-3 col-12 h4">Dewan Pembina</p>
                                <dt class="col-4">Ketua </dt>
                                <div class="col-1">:</div>
                                <dd class="col-7"> KH Abd. Aziz RM (RT An-Najiah)</dd>
                                <dt class="col-4">Anggota</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Ustadz Rusman (RT Arroyan)</dd>

                                <p class="mt-3 col-12 h4">Pengurus</p>
                                <dt class="col-4">Ketua Umum</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Wina Pratiwi (RT Daqu Ketapang)</dd>
                                <dt class="col-4">Ketua</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Ustadz Jamaluddin Alghozi (RT Sholeh Mudzakkir)</dd>
                                <dt class="col-4">Sekretaris Umum</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">H. Samsul Hadi, S.Sos. (RT Ulil Albab Nusantara)</dd>
                                <dt class="col-4">Sekretaris</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Ustadz Wahid Hasim (RT An-Najah)</dd>
                                <dt class="col-4">Bendahara Umum</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Noerhadi Prasetio (RT Darul Muhajirin)</dd>
                                <dt class="col-4">Bendahara</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Ambarwati (Pengajar & Relawan)</dd>

                                <p class="mt-3 col-12 h4">Pengawas</p>
                                <dt class="col-4">Ketua</dt>
                                <div class="col-1">:</div>
                                <dd class="col-7">Ustadz Yakhub (RT Barokatul Qur’an)</dd>
                            </dl>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/konten/org.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Visi Misi ======= -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="<?= base_url('assets') ?>/img/konten/visi.png" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-filter-3-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a>Visi</a></h5>
                            <p class="card-text">
                                Terwujudnya Probolinggo menjadi Kota dan Kabupaten yang melahirkan para hafidz/hafidzah sehingga melahirkan generasi Qur'ani yang akan memimpin bangsa Indonesia menjadi <br><i>"Baldatun Thayyibatun Wa Robbun Ghofur"</i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="<?= base_url('assets') ?>/img/konten/misi.png" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-check-double-fill"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a>Misi</a></h5>
                            <p class="card-text">
                                Menjaga dan menumbuhkan semangat para santri penghafal Qur'an untuk menjaga cita-citanya menjadi hafidz/hafidzah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Boxes Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="<?= base_url('assets') ?>/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="<?= base_url('assets') ?>/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                        quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="<?= base_url('assets') ?>/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                        labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="<?= base_url('assets') ?>/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                        dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="<?= base_url('assets') ?>/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                        labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Program Section ======= -->
    <section id="program" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Program</h2>
                <p>Program kami </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                    <div class="icon-box icon-box-fix">
                        <i class="icofont-architecture-alt"></i>
                        <h4><a href="#">Program Unggulan</a></h4>
                        <ol>
                            <li>Peduli Guru</li>
                            <li>Sedekah Qur'an</li>
                            <li>Pesantren Tahfidz</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-box icon-box-fix">
                        <i class="icofont-ui-calendar"></i>
                        <h4><a href="#">Program Rutin</a></h4>
                        <ol>
                            <li>Simaan</li>
                            <li>Tabarrukan</li>
                            <li>Ujian dan Wisuda Santri</li>
                            <li>Kemah Santri</li>
                            <li>TemanQu (Tebar Manfaat Hewan Qurban)</li>
                            <li>Probolinggo Menghafal</li>
                            <li>Workshop/Pelatihan/Kajian Kitab</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-box icon-box-fix">
                        <i class="icofont-moon"></i>
                        <h4><a href="#">Ramadhan</a></h4>
                        <p>BelaQosaQu (Berkah Lailatul Qodar bersama Santri Qur'an) </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-box icon-box-fix">
                        <i class="icofont-unity-hand"></i>
                        <h4><a href="#">Yaruthab Peduli</a></h4>
                        <ol>
                            <li>Yatim & Dhuafa</li>
                            <li>Bakti Sosial</li>
                            <li>Ngaji on the Street (NgaOs)</li>
                        </ol>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End Program Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Galeri kegiatan</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="<?= base_url('assets') ?>/img/uploads/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pengurus</h2>
                <p>Daftar Pengurus YARUTHAB</p>
            </div>

            <div class="row">
                <?php foreach ($pengurus as $p) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="pic">
                                <img src="<?= base_url('assets') ?>/img/uploads/profile/<?= $p['img']; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4><?= $p['nama']; ?></h4>
                                <span><?= $p['jabatan']; ?></span>
                                <div class="social">
                                    <?php if ($p['twitter']) : ?>
                                        <a targer="blank" href="<?= $p['twitter']; ?>"><i class="icofont-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if ($p['facebook']) : ?>
                                        <a targer="blank" href="<?= $p['facebook']; ?>"><i class="icofont-facebook"></i></a>
                                    <?php endif; ?>
                                    <?php if ($p['instagram']) : ?>
                                        <a targer="blank" href="<?= $p['instagram']; ?>"><i class="icofont-instagram"></i></a>
                                    <?php endif; ?>
                                    <a targer="blank" href="mailto:<?= $p['email']; ?>"><i class="icofont-email"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Team Section -->
    <?= $this->endSection(); ?>