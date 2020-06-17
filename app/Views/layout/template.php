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

    <!-- Vendor CSS Files -->
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

            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-5 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
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
                            <h3>Yaruthab social links :</h3>
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
                Designed by <a href="">Dewi-BootstrapMade</a>
                <br>
                Developed by <a href="https://nrdnisml.github.io" target="blank">@nrdnisml</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

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

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets') ?>/js/main.js"></script>

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
        });
    </script>

</body>

</html>