<?= $this->extend('layout/authTemplate'); ?>
<?= $this->section('form'); ?>
<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                    </div>

                    <form class="user" method="post" action=<?= base_url('auth/register'); ?>>
                        <?= csrf_field(); ?>

                        <p class="h6 ml-2">Data Akun</p>

                        <!-- INPUT USERNAME -->
                        <div class="form-group">
                            <?php if (isset($validation) && $validation->showError('username')) : ?>
                                <input type="text" class="form-control form-control-user is-invalid" name="username" id="username" placeholder="Username" value="<?= set_value('username') ?>" autocomplete="off">
                                <small class="danger pl-3">
                                    <?= $validation->showError('username'); ?>
                                </small>
                            <?php else : ?>
                                <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username" value="<?= set_value('username') ?>" autocomplete="off">
                            <?php endif; ?>
                        </div>
                        <!-- END INPUT USERNAME -->

                        <!-- INPUT PASSWORD AND PASS CONFIRMATION -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <?php if (isset($validation) && $validation->showError('password')) : ?>
                                    <input type="password" class="form-control form-control-user is-invalid" id="password" name="password" placeholder="Password">
                                    <small class="danger pl-3">
                                        <?= $validation->showError('password'); ?>
                                    </small>
                                <?php else : ?>
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <?php if (isset($validation) && $validation->showError('password1')) : ?>
                                    <input type="password" class="form-control form-control-user is-invalid" id="password1" name="password1" placeholder="Repeat Password">
                                    <small class="danger pl-3">
                                        <?= $validation->showError('password1'); ?>
                                    </small>
                                <?php else : ?>
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Repeat Password">
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- END INPUT PASSWORD AND PASS CONFIRMATION -->

                        <!-- INPUT NAMA -->
                        <p class="h6 ml-2">Data Diri</p>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <?php if (isset($validation) && $validation->showError('nama')) : ?>
                                    <input type="text" class="form-control form-control-user is-invalid" id="nama" name="nama" placeholder="Nama" autocomplete="off" value="<?= set_value('nama'); ?>">
                                    <small class="danger pl-3">
                                        <?= $validation->showError('nama'); ?>
                                    </small>
                                <?php else : ?>
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama" autocomplete="off" value="<?= set_value('nama'); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- END INPUT NAMA -->

                        <!-- INPUT NO HP -->
                        <div class="form-group">
                            <?php if (isset($validation) && $validation->showError('no_hp')) : ?>
                                <input type="text" class="form-control form-control-user is-invalid" name="no_hp" id="no_hp" placeholder="No Handphone" value="<?= set_value('no_hp') ?>" autocomplete="off">
                                <small class="danger pl-3">
                                    <?= $validation->showError('no_hp'); ?>
                                </small>
                            <?php else : ?>
                                <input type="text" class="form-control form-control-user" name="no_hp" id="no_hp" placeholder="No Handphone" value="<?= set_value('no_hp') ?>" autocomplete="off">
                            <?php endif; ?>
                        </div>
                        <!-- END INPUT NO HP -->
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('/login') ?>">Sudah punya akun ? Silahkan login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>