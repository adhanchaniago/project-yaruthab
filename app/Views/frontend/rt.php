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
                <li class="drop-down"><a href="">Lainnya</a>
                    <ul>
                        <li><a href="<?= base_url('/rt'); ?>">Rumah Tahfidz</a></li>
                        <li><a href="<?= base_url('/pesantren'); ?>">Pesantren Tahfidz Tahafudzlil Qur'an Hamalatul Qur'an </a></li>
                        <li><a href="<?= base_url('/doc'); ?>">Formulir dan Dokumen lain</a></li>
                    </ul>
                </li>
                <li><a href="#donasi">Donasi</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        <a href="" data-toggle="modal" data-target="#MyModal" class="get-started-btn scrollto"> <i class="icofont-basket"></i> Ya Store</a>

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
                        <div class="icon-box" id="rt-ico">
                            <i class="icofont-building-alt"></i>
                            <h4>Rumah Thafidz</h4>
                            <p>Rumah Tahfidz merupakan suatu program untuk gerakan mencetak para penghafal Al Qur’an di masyarakat, tujuannya adalah menumbuhkan motivasi masyarakat untuk menjadi penghafal Qur’an di lingkungan masing-masing.</p>
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
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                        <i class="ri-home-heart-fill"></i>
                        <h4 class="d-none d-lg-block">Syarat pendirian RT</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <i class="ri-user-heart-fill"></i>
                        <h4 class="d-none d-lg-block">Syarat Asatidz</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <i class="ri-home-smile-2-line"></i>
                        <h4 class="d-none d-lg-block">Pengurus RT</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-toggle="tab" href="#tab-4">
                        <i class="ri-user-5-fill"></i>
                        <h4 class="d-none d-lg-block">Santri</h4>
                    </a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">

                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Syarat pendirian rumah tahfidz</h3>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Tempat untuk proses belajar mengajar
                                </li>
                                <li><i class="ri-check-double-line"></i> Pengelola/pengurus
                                </li>
                                <li><i class="ri-check-double-line"></i> Guru tahfidz/Asatidz
                                </li>
                                <li><i class="ri-check-double-line"></i> Santri yang belajar
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/konten/sejarah.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Syarat Asatidz/Pengajar Tahfidz</h3>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Hafidz/Hafidzah Khatam Qur’an Bil Ghoib 30 Juz
                                </li>
                                <li><i class="ri-check-double-line"></i> Belum Hafidz/Hafidzah namun sudah hafal minimal 5 Juz, dengan catatan harus terus menerus menambah hafalannya
                                </li>
                                <li><i class="ri-check-double-line"></i> Punya kemampuan mengajar
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/konten/misi.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Siapa pengurus Rumah Tahfidz</h3>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Pemilik tempat
                                </li>
                                <li><i class="ri-check-double-line"></i> Takmir masjid / musholla
                                </li>
                                <li><i class="ri-check-double-line"></i> Tokoh masyarakat muslim
                                </li>
                                <li><i class="ri-check-double-line"></i> Warga ataupun masyarakat yang bersedia mensedekahkan waktu, tenaga dan pikirannya untuk mengelola Rumah Tahfidz
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/bg/testi.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Santri</h3>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Mampu membaca Al-Qur’an dengan tartil atau sudah Khotmil Qur’an dari lembaga TPA/TPQ.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= base_url('assets') ?>/img/konten/visi.png" alt="" class="img-fluid">
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
                            <table id="example2" class="table table-bordered table-responsive-sm table-hover">
                                <thead>
                                    <tr>
                                        <th>Rumah Tahfidz</th>
                                        <th>Pembina</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rumahtahfid as $r) : ?>
                                        <tr>
                                            <td><?= $r['nama']; ?></td>
                                            <td><?= $r['pembina']; ?></td>
                                            <td><?= $r['alamat']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Rumah Tahfidz</th>
                                        <th>Pembina</th>
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