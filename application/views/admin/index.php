
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                    <div class="card mb-3" style="max-width: 850px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title"><?= $user['name'] ?></h5>
                                <p class="card-text"><?= $user['email'] ?></p>
                                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y',
                                 $user['date_created']) ?></small></p>
                                </div>
                                <div class="btn btn-info"> 
                                <a href="<?= base_url('admin/edit'); ?>" class="text text-white"><i class="fas fa-user-edit"></i> Ubah Profil</a> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           