<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets') ?>/img/logo1.png" rel="icon">
    <link href="<?= base_url('assets') ?>/img/logo1.png" rel="yaruthab-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- dropify -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/dropify.css">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/datatables/css/dataTables.bootstrap4.css">
    <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets') ?>/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Dewi - v2.0.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?= $this->renderSection('nav'); ?>
    <!-- End Header -->

    <?= $this->renderSection('content'); ?>


    <!-- ======= Donasi Section ======= -->
    <section id="donasi" class="contact">
        <div class="container" data-aos="fade-up"">
            <div class=" section-title">
            <h2>Donasi</h2>
            <p>support kami dengan berdonasi</p>
        </div>

        <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="" method="" role="form" class="php-email-form text-center">
                    <h3>Donasi untuk YARUTHAB</h3>
                    <p>Anda juga dapat berdonasi dengan menghubungi kontak yang tersedia, atau melalui kantor kami</p>
                    <a href="" data-toggle="modal" data-target="#donasiModal" class="btn btn-lg btn-primary"><i class="fas fa-hand-holding-heart"></i> Donasi Sekarang</a>
                    <div class="mt-4 text-left">
                        <h4>Rekening kami</h4>
                        <div class="bank">
                            <img src="<?= base_url('/assets/img/bank/mandiri.jpg'); ?>" alt="mandiri syariah">
                            <span>710-7835-808 (kode bank 451)</span>
                        </div>
                        <div class="bank">
                            <img src="<?= base_url('/assets/img/bank/bri.png'); ?>" alt="bank bri">
                            <span>0073-01-025084-53-3 (kode bank 002)</span>
                        </div>
                        <div class="bank">
                            <img src="<?= base_url('/assets/img/bank/muamalat.jpeg'); ?>" alt="bank muamalat">
                            <span>713-0011395 (kode bank 147)</span>
                        </div>
                        <div class="bank">
                            <img src="<?= base_url('/assets/img/bank/jatim.jpg'); ?>" alt="bank jatim">
                            <span>0123-662113 (kode bank 114)</span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Kantor Pusat</h3>
                            <p>JL. Raya Bromo No.23 Ketapang, Kota Probolinggo</p>
                            <hr>
                            <h3>Kantor Sekretariat</h3>
                            <p>Ruko Panglima Sudirman Blok F5 Jl. Pahlawan Kota Probolinggo</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="mailto:yaruthab@gmail.com">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Kami</h3>
                                <p>yaruthab@gmail.com</p>
                                <small class="text-danger">Ketuk untuk kirim email</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="https://wa.me/62811331167" target="blank">
                            <div class="info-box call mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Hubungi Kami</h3>
                                <p>+62811 3311 67</p>
                                <small class="text-danger">Ketuk untuk chat melalui whatsapp</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

                <div class="footer-info">
                    <div class="row">
                        <div class="col-6 text-right">
                            <h3>Media sosial kami :</h3>
                        </div>
                        <div class="col-6 social-links">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="copyright">
                &copy; <strong><span>Yaruthab.org</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
                <!-- Designed by <a href="">Dewi-BootstrapMade</a>
                <br>
                Developed by <a href="https://nrdnisml.github.io" target="blank">@nrdnisml</a> -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Modal -->
    <div class="modal fade" id="MyModal" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <img src="<?= base_url('assets') ?>/img/logo1.png" alt="logo">
                    <img src="<?= base_url('assets') ?>/img/logo1.png" alt="logo">
                    <img src="<?= base_url('assets') ?>/img/logo1.png" alt="logo">
                    <img src="<?= base_url('assets') ?>/img/logo1.png" alt="logo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5>Comming Soon !</h5>
                    Yarustore dalam tahap development. <i>Stay tuned!!!</i>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                        <a href="https://yaruthab.org">www.yaruthab.org</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="donasiModal" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-5" id="exampleModalLabel"><i class="icofont-pencil-alt-2"></i> Mohon isi data diri Anda (data donatur)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('/donasi/add'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="row  justify-content-center">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="nama-i">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama-i" placeholder="Masukkan nama Anda" required autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="nominal-i">Nominal Donasi</label>
                                        <input type="number" class="form-control" name="nominal" id="nominal-i" placeholder="Rp. " required autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="email-i">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email-i" placeholder="someone@example.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="no-i">No. Handphone / whatsapp</label>
                                        <input type="number" class="form-control" name="no_hp" id="no-i" required autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat-i"><b>Alamat</b></label>
                                        <textarea name="alamat" class="form-control" id="alamat-i" rows="5"></textarea>
                                    </div>
                                    <input type="hidden" name="konfirmasi" value="0">
                                    <button type="submit" class="btn btn-primary float-right"><i class="icofont-paper-plane"></i> Selanjutnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <small class="m-auto">Harap isi dengan data yang valid</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/datatables/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets') ?>/js/popper.js"></script>
    <script src="<?= base_url('assets') ?>/js/main.js"></script>
    <!-- sweetalert -->
    <script src="<?= base_url('assets'); ?>/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/myscript.js"></script>
    <!-- dropify -->
    <script src="<?= base_url('assets') ?>/js/dropify.js"></script>
    <!-- Template Main JS File -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
            $('.dropify').dropify({
                error: {
                    'fileSize': 'Ukuran file terlalu besar. ({{ value }} max).',
                    'fileExtension': 'Format hanya diperbolehkan ({{ value }}).'
                },
                messages: {
                    'default': '',
                }
            });
        });
    </script>

</body>

</html>