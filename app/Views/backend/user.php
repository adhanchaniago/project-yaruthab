<?= $this->extend('layout/adminTemplate'); ?>

<?= $this->extend('layout/admintemplate'); ?>
<?= $this->section('content'); ?>
<?php helper('global'); ?>
<div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data User YARUTHAB</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableRT" class="table table-responsive-md table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Status</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($user as $u) : ?>
                            <tr>
                                <td><a href="" data-toggle="modal" data-id="<?= $u['id'] ?>" class="tombol-detail" data-target="#modalProfile"><?= $u['nama']; ?></a></td>
                                <td> <?= $u['username']; ?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-primary edit-role" data-toggle="modal" data-target="#edit" data-id="<?= $u['id'] ?>">
                                        <i class=" fas fa-pencil-alt mr-2"></i><?= $u['role']; ?>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <?php if ($u['is_active'] == 1) : ?>
                                        <?php $u['is_active'] = "Aktif"; ?>
                                        <a href="<?= base_url('/user/aktifasiUser'); ?>/<?= $u['id']; ?>">
                                            <span class="badge badge-primary"><?= $u['is_active']; ?></span>
                                        </a>
                                    <?php else : ?>
                                        <?php $u['is_active'] = "Tidak aktif"; ?>
                                        <a href="<?= base_url('/user/aktifasiUser'); ?>/<?= $u['id']; ?>">
                                            <span class="badge badge-warning"><?= $u['is_active']; ?></span>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <a href="<?= base_url('/santri'); ?>/<?= $u['id']; ?>" class="tombol-hapus btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Status</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT ROLE -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- PROFILE -->
            <div class="modal-body card-primary card-outline">
                <div class="text-center">
                    <img src="<?= base_url('assets'); ?>/img/uploads/profile/profile.png" class="img-circle elevation-2" id="img1" alt="User Image" width="120" height="120" style="object-fit:cover;">
                </div>

                <h3 class="profile-username text-center mt-3" id="nama1"><u>User Name</u></h3>

                <p class="text-muted text-center mt-3" id="role">Edit Role User</p>

                <!-- FORM -->
                <form action="<?= base_url('/user/editRoleUser'); ?>/<?= $u['id']; ?>" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="containe">
                        <div class="form-group row text-center">
                            <div class="col-12">
                                <select type="text" class="form-control" name="role" id="role_user">
                                    <?php foreach ($role as $r) : ?>
                                        <option value="<?= $r['role']; ?>"><?= $r['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                <!-- END FORM -->
            </div>
            <!-- END PROFILE -->
        </div>
    </div>
</div>
<!-- END MODAL -->

<!-- modal detail pengajar -->
<div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><b>YARUTHAB</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">

                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead " id="nama-d"><b>Nicole Pearson</b></h2>
                                <ul class="fa-ul" style="margin-left: 0;">
                                    <li>
                                        <b class="text-muted text-sm">Role User : </b>
                                        <span class="text-muted text-sm" id="role-d"> Web Designer / UX / Graphic Artist / Coffee Lover </span>
                                    </li>
                                    <li>
                                        <b class="text-muted text-sm">Status : </b>
                                        <span class="text-muted text-sm" id="status-d"> Web Designer / UX / Graphic Artist / Coffee Lover </span>
                                    </li>
                                    <li>
                                        <b class="text-muted text-sm">Register pada : </b>
                                        <span class="text-muted text-sm" id="tgl-d"> ini tanggal </span>
                                    </li>
                                </ul>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small">
                                        <span class="fa-li">
                                            <i class="fas fa-phone"></i>
                                        </span> Nomor HP : + <span id="no-d"> 800 - 12 12 23 52</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img id="img-d" src="<?= base_url('assets'); ?>/img/uploads/profile/profile.png" alt="" width="100" height="100" class="img-circle" style="object-fit:cover;">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" id="wa-d" class="btn btn-sm bg-teal">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="far fa-times-circle"></i> Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('ajax'); ?>
<script>
    $('.tombol-detail').on('click', function() {
        const id = $(this).data('id');
        const tanggal = $(this).data('created_at');
        $.ajax({
            url: '<?= base_url('/user/getdatabyid'); ?>/' + id,
            data: {
                id: id,
                tanggal: tanggal
            },
            method: 'get',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if (data.is_active == 1) {
                    var status = "Aktif";
                } else {
                    var status = "Tidak aktif"
                }

                $('#nama-d').html(data.nama);
                $('#role-d').html(data.role);
                $('#no-d').html(data.no_hp);
                $('#status-d').html(status);
                $('#tgl-d').html(data.created_at);
                $('#img-d').attr('src',
                    '<?= base_url('assets'); ?>/img/uploads/profile/' + data
                    .img);
                $("#wa-d").attr("href", "https://wa.me/" + data.no_hp);
            }
        });
    });

    $('.edit-role').on('click', function() {
        // $('.modal-body form').attr('action', '<?= base_url(); ?>/anggota/edit');
        const id = $(this).data('id');
        $.ajax({
            url: '<?= base_url('/user/getdatabyid'); ?>/' + id,
            data: {
                id: id
            },
            method: 'get',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#role_user').val(data.role);
                $('#nama1').html(data.nama);
                $('#img1').attr('src',
                    '<?= base_url('assets'); ?>/img/uploads/profile/' + data
                    .img);
            }
        });
    });
</script>
<?= $this->endSection(); ?>