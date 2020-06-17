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
                <li><a href="#tentang">Rumah Tahfidz</a></li>
                <li><a href="#syarat">Syarat Pengajar & RT</a></li>
                <li><a href="#mitra">RT Mitra YARUTHAB</a></li>
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
<section id="hero-rt">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <h1>YARUTHAB</h1>
            <h2>RUMAH TAHFIDZ</h2>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= rt Section ======= -->
    <section id="tentang" class="services section-bg">
        <div class="rt">

            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>apa itu</h2>
                    <p>Rumah Tahfidz ?</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-12">
                        <div class="icon-box">
                            <i class="icofont-building-alt"></i>
                            <h4>Rumah Thafidz</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, commodi officia
                                itaque
                                recusandae quaerat labore? Laborum, voluptas fugit odio esse assumenda eius numquam
                                facere deleniti corporis, quasi aliquam cupiditate eum reiciendis, cum ea voluptatum
                                soluta. Quam reprehenderit explicabo quia, laudantium ratione laboriosam quis
                                excepturi
                                eum. Iste minus non modi at corporis beatae reiciendis voluptas libero est, culpa
                                adipisci unde quaerat hic dicta, ex dolorem, ab aliquid harum sapiente inventore
                                suscipit. Amet dicta quos reiciendis, nemo non nisi quibusdam expedita nobis
                                consequatur
                                hic deleniti omnis quasi eius! Alias veritatis mollitia enim deleniti nostrum eos
                                laudantium numquam eligendi delectus, pariatur officiis sapiente!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End rt Section -->

    <!-- ======= Features Section ======= -->
    <section id="syarat" class="features">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Syarat</h2>
                <p>Pengajar & Rumah Tahfidz</p>
            </div>
            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-6">
                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                        <i class="ri-home-heart-fill"></i>
                        <h4 class="d-lg-block">Rumah Tahfidz</h4>
                    </a>
                </li>
                <li class="nav-item col-6">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <i class="ri-user-heart-fill"></i>
                        <h4 class="d-lg-block">Pengajar/Asatidz</h4>
                    </a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">

                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Syarat pendirian rumah tahfidz</h3>
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
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Syarat pendaftaran tenaga pengajar</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident,
                                sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores
                                    dolores quos qui a.
                                    Ipsum neque dolor voluptate nisi sed.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat nulla
                                    pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/features-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Visi Misi ======= -->
    <section id="mitra" class="about-boxes">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Daftar</h2>
                <p>Rumah Tahfidz Mitra YARUTHAB</p>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Rumah Tahfidz</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                    <tr>
                                        <td>Hasanatin</td>
                                        <td>Jl. Panglima Sudirman No. Lorem, ipsum dolor.</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Rumah Tahfidz</th>
                                        <th>Alamat</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>


            </div>

        </div>
    </section>
    <!-- End About Boxes Section -->
    <?= $this->endSection(); ?>