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
                <li><a href="#struktur">Struktur Organisasi</a></li>
                <li><a href="#program">Program Kami</a></li>
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
<!-- ======= Hero Section ======= -->
<section id="hero-pesantren">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <h1>Pesantren Tahfidz Tahafudzlil Qur'an Hamalatul Qur'an</h1>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">


    <!-- ======= Organisasi Section ======= -->
    <section id="struktur" class="features">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Struktur Organisasi</h2>
                <p>Pesantren</p>
            </div>
            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-12">
                    <a class="nav-link active " data-toggle="tab" href="#tab-1">
                        <i class="ri-history-line"> </i>
                        <h4 class="pl-1 d-lg-block"> Organisasi</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">

                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Struktur Organisasi Pesantren</h3>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                                <li><i class="ri-check-double-line
                    "></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat nulla
                                    pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident,
                                sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/features-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Organisasi Section -->

    <!-- ======= Program Section ======= -->
    <section id="program" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Program</h2>
                <p>Program Pesantren Tahfidz </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-building-alt"></i>
                        <h4><a href="#">Rumah Thafidz</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, commodi officia itaque
                            recusandae quaerat labore? Laborum, voluptas fugit odio esse assumenda eius numquam
                            facere deleniti corporis, quasi aliquam cupiditate eum reiciendis, cum ea voluptatum
                            soluta. Quam reprehenderit explicabo quia, laudantium ratione laboriosam quis excepturi
                            eum. Iste minus non modi at corporis beatae reiciendis voluptas libero est, culpa
                            adipisci unde quaerat hic dicta, ex dolorem, ab aliquid harum sapiente inventore
                            suscipit. Amet dicta quos reiciendis, nemo non nisi quibusdam expedita nobis consequatur
                            hic deleniti omnis quasi eius! Alias veritatis mollitia enim deleniti nostrum eos
                            laudantium numquam eligendi delectus, pariatur officiis sapiente!</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-read-book-alt"></i>
                        <h4><a href="#">Madrasah Diniyah</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ducimus at beatae?
                            Asperiores sed culpa neque ratione. Voluptatem, ea? Delectus architecto debitis
                            quibusdam, beatae accusamus reiciendis laborum, vel repellendus a accusantium
                            repudiandae asperiores. Praesentium tenetur dignissimos et non laborum odio corporis
                            dicta, animi amet excepturi aliquid eligendi sint quas tempora dolorum perferendis,
                            incidunt eaque! Porro, voluptas! Reiciendis incidunt odio voluptate, molestiae sapiente
                            facere. Libero hic, numquam corporis laborum impedit, nam id distinctio sit ratione
                            dolorum magni doloribus tempora laboriosam deleniti exercitationem nulla voluptatibus
                            ducimus quod illum eos quas iusto quisquam tempore. Aut obcaecati quaerat quia ipsam
                            ipsum consequatur, excepturi dolor?</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-group"></i>
                        <h4><a href="#">Bimbingan Keagamaan Lansia</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, labore maiores quod,
                            qui provident ipsa rerum eum sed earum magnam quidem voluptatum repellendus quaerat
                            voluptatibus voluptate corporis molestiae repellat itaque blanditiis perspiciatis id
                            porro, pariatur exercitationem inventore. Nobis magnam omnis veniam mollitia! Temporibus
                            commodi nam obcaecati optio distinctio maiores eius quae vero sunt, tempora iste officia
                            sapiente illo cupiditate eaque sequi animi aperiam. Voluptatem ducimus, dolorum harum
                            cupiditate ad repellendus. Eligendi accusantium, dolorem at aliquid saepe quam sunt
                            molestias consectetur quod, ipsam maiores? Quo maxime itaque, eveniet distinctio, magni
                            accusantium quam inventore dolorem voluptatem ad rerum consectetur mollitia aut
                            delectus!</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-unity-hand"></i>
                        <h4><a href="#">Rumah Yatim Piatu</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta fugiat adipisci suscipit
                            recusandae voluptas repellendus quod ut tenetur dolorem porro atque blanditiis
                            laudantium cupiditate facilis sint, at soluta beatae. Voluptatum, accusamus et!
                            Distinctio, facilis similique accusamus deleniti ducimus id soluta dolores ullam ad modi
                            autem incidunt hic cum fugit reiciendis nemo molestias officiis quibusdam explicabo
                            beatae earum et vel rerum. Adipisci laboriosam dolore voluptas ullam ipsa totam nam,
                            exercitationem mollitia natus est! Voluptatum odio quae qui? Reprehenderit quaerat
                            quidem rem, consequuntur ad aspernatur porro cum recusandae quia praesentium inventore
                            similique, voluptas animi, laborum labore exercitationem non? Illo cupiditate nam
                            possimus.</p>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End Program Section -->

    <?= $this->endSection(); ?>