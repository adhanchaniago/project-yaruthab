<?= $this->extend('layout/authTemplate.php'); ?>

<?= $this->section('form'); ?>

<div class="flash-data" data-flashdata="<?= session()->getFlashdata('meesage'); ?>"></div>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('registrasi'); ?>"></div>

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-light">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="<?= base_url('assets') ?>/img/logo1.png" alt="Yaruthab Logo" class="brand-image rounded-circle mb-4 border-danger" width="85" style="opacity: .8">
                                <!-- <h1></h1> -->
                            </div>
                            <form class="user" method='post' action="<?= base_url('Auth'); ?>">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <?php if (isset($validation) && $validation->showError('username')) : ?>
                                        <input type="text" name="username" class="form-control form-control-user is-invalid" id="username" aria-describedby="emailHelp" value="<?= set_value('username'); ?>" placeholder="Username" autocomplete="off">
                                        <small class="danger pl-3">
                                            <?= $validation->showError('username'); ?>
                                        </small>
                                    <?php else : ?>
                                        <input type="text" name="username" class="form-control form-control-user" id="username" aria-describedby="emailHelp" value="<?= set_value('username'); ?>" placeholder="Username" autocomplete="off">
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($validation) && $validation->showError('password')) : ?>
                                        <input type="password" class="form-control form-control-user is-invalid" id="password" name="password" placeholder="Password">
                                        <small class="danger pl-3">
                                            <?= $validation->showError('password'); ?>
                                        </small>
                                    <?php else : ?>
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?php endif; ?>

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/register') ?>">Daftar akun baru!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>