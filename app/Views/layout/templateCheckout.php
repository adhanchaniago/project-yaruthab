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

</head>

<body class="bg-light">

    <!-- ======= Header ======= -->
    <?= $this->renderSection('nav'); ?>
    <!-- End Header -->

    <?= $this->renderSection('content'); ?>




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
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets') ?>/js/main.js"></script>
    <!-- sweetalert -->
    <script src="<?= base_url('assets'); ?>/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/myscript.js"></script>
    <!-- dropify -->
    <script src="<?= base_url('assets') ?>/js/dropify.js"></script>
    <!-- Template Main JS File -->
</body>

</html>