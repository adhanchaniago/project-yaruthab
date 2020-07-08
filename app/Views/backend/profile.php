<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->section('content'); ?>
<?php helper('global');
$created_at = longdate_indo(substr($user['created_at'], 0, 10));
$updated_at = longdate_indo(substr($user['updated_at'], 0, 10)); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <!-- PROFILE     -->
    <div class="col-lg-4 col-sm-12">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img src="<?= base_url('assets/img/thumbnail/thumb_'); ?><?= $user['img']; ?>" class="img-circle elevation-2" alt="User Image" width="120" height="120" style="object-fit:cover;">
                </div>

                <h3 class="profile-username text-center mt-3">
                    <?= $user['nama'] . " "; ?>
                </h3>

                <p class="text-muted text-center"><?= $role; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Username</b> <a class="float-right"><?= $user['username']; ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Nomor Handphone</b> <a class="float-right"><?= $user['no_hp']; ?></a>
                    </li>
                    <li class="list-group-item">
                        <small><b>Terdaftar pada</b> <a class="float-right"><?= $created_at; ?></a></small>
                    </li>
                    <li class="list-group-item">
                        <small><b>Terakhir diupdate pada</b> <a class="float-right"><?= $updated_at; ?></a></small>
                    </li>
                </ul>
                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- END PROFILE -->
    <!-- EDIT PROFILE -->
    <div class="col-lg-8 col-sm-12">
        <div class="card card-danger card-outline">
            <div class="card-body">
                <h5 class="h4">
                    Edit Profile
                </h5><br>

                <form action="<?= base_url(); ?>/profile" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control <?= isset($validation) && $validation->showError('nama') ? 'is-invalid' : ''; ?>" id="nama" aria-describedby="emailHelp" value="<?= $user['nama'] ?>">
                                <div class="invalid-feedback">
                                    <?= isset($validation) ? $validation->showError('nama') : ''; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nomor">No. Handphone</label>
                                <input type="number" name="nomor" class="form-control <?= isset($validation) && $validation->showError('nomor') ? 'is-invalid' : ''; ?>" id="nomor" value="<?= $user['no_hp'] ?>">
                                <div class="invalid-feedback">
                                    <?= isset($validation) ? $validation->showError('nomor') : ''; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control <?= isset($validation) && $validation->showError('username') ? 'is-invalid' : ''; ?>" id="username" value="<?= $user['username'] ?>">
                                <div class="invalid-feedback">
                                    <?= isset($validation) ? $validation->showError('username') : ''; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="password">Ganti password</label>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user  <?= isset($validation) && $validation->showError('password') ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
                            <small class="text-danger"><i>** Kosongkan field password jika tidak ingin mengganti password</i></small>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user <?= isset($validation) && $validation->showError('password1') ? 'is-invalid' : ''; ?>" id="password1" name="password1" placeholder="Repeat Password">
                            <div class="invalid-feedback">
                                <?= isset($validation) ? $validation->showError('password1') : ''; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="gambar">Foto</label>
                                <input type="file" class="dropify" name="gambar" id="gambar" data-height="95" data-allowed-file-extensions="jpg jpeg png" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-1">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>