<div class="iq-navbar-header" style="height: 135px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="<?= base_url('assets/') ?>images/dashboard/top-header.png" alt="header"
            class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="<?= base_url('assets/') ?>images/dashboard/top-header1.png" alt="header"
            class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="<?= base_url('assets/') ?>images/dashboard/top-header2.png" alt="header"
            class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="<?= base_url('assets/') ?>images/dashboard/top-header3.png" alt="header"
            class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="<?= base_url('assets/') ?>images/dashboard/top-header4.png" alt="header"
            class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="<?= base_url('assets/') ?>images/dashboard/top-header5.png" alt="header"
            class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div> <!-- Nav Header Component End -->
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 ">
    <div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h3 class="card-title">Menambahkan Data Warga Baru</h3>
                    <p class="text-center" style="width: 100%;" ><?= $this->session->flashdata('message'); ?></p>
                </div>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label" for="name">Nama Kepala Keluarga:</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder=" Masukkan Nama Kepala Keluarga" name="name"
                                    value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="nokk">Nomor Kartu Keluarga:</label>
                                <input type="text" class="form-control" id="nokk"
                                    placeholder="Masukkan Nomor Kartu Keluarga" name="nokk"
                                    value="<?= set_value('nokk') ?>">
                                <?= form_error('nokk', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="status">Status:</label>
                                <select class="selectpicker form-control" id="status" data-style="py-0" name="status">
                                    <option value="">Pilih Status</option>
                                    <option value="dikontrakkan/disewa" <?= set_select('status', 'dikontrakkan/disewa', (!empty($selectedStatus) && $selectedStatus == 'dikontrakkan/disewa') ? true : false) ?>>
                                        Dikontrakkan/Disewa</option>
                                    <option value="tetap" <?= set_select('status', 'tetap', (!empty($selectedStatus) && $selectedStatus == 'tetap') ? true : false) ?>>Tetap</option>
                                </select>
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-label" for="kontak">Nomor HP:</label>
                                <input type="text" class="form-control" id="kontak" placeholder="Masukkan Nomor HP"
                                    value="<?= set_value('nohp') ?>" name="nohp">
                                <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="anggotakeluarga">Jumlah Anggota Keluarga:</label>
                                <input type="text" class="form-control" id="anggotakeluarga"
                                    placeholder="Masukkan Jumlah Anggota Keluarga" value="<?= set_value('jumangkel') ?>"
                                    name="jumangkel">
                                <?= form_error('jumangkel', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label" for="alamat">Alamat:</label>
                                <input type="text" class="form-control" id="alamat"
                                    placeholder="Masukkan Blok Dan Nomor Rumah" value="<?= set_value('alamat') ?>"
                                    name="alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                        </div>
                        <hr>
                        <h5 class="mb-3">Account</h5>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label" for="uname">Username:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Username"
                                    value="<?= set_value('username') ?>" name="username">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="password1">Password:</label>
                                <input type="password" class="form-control" id="password1"
                                    placeholder="Password Sama Dengan No KK" value="<?= set_value('password1') ?>"
                                    name="password1">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="password2">Ulangi Password:</label>
                                <input type="password" class="form-control" id="password2" placeholder="Ulangi Password"
                                    value="<?= set_value('password2') ?>" name="password2">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>