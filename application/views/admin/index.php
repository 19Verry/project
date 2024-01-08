<div class="iq-navbar-header" style="height: 135px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>

                    </div>
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
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between flex-wrap">
                    <div class="header-title">
                        <h4 class="card-title mb-0">Jabatan Petugas RT</h4>
                        <p class="text-center" style="width: 100%;">
                            <?= $this->session->flashdata('message'); ?>
                        </p>
                    </div>
                    <div class="">
                        <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3 px-3"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="btn-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </i>
                            <span>Tambahkan</span>
                        </a>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Menambahkan Petugas RT Baru
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('Admin/tambah') ?>" method="post">

                                            <div class="form-group">
                                                <label for="uname" class="form-label">Username</label>
                                                <select class="selectpicker form-control" id="jabatan" required
                                                    name="username" data-style="py-0">
                                                    <option value="">Pilih Username</option>
                                                    <?php foreach ($userwarga as $us): ?>
                                                        <option value="<?= $us['username'] ?>" ?>
                                                            <?= $us['username'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="role" class="form-label">Jabatan</label>
                                                <select class="selectpicker form-control" id="role" required name="role"
                                                    data-style="py-0">
                                                    <option value="">Pilih Jabatan</option>
                                                    <option value="ketua rt">Ketua RT</option>
                                                    <option value="wakil rt">Wakil RT</option>
                                                    <option value="sekretaris">Sekretaris</option>
                                                    <option value="bendahara">Bendahara</option>
                                                </select>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary ">Save</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Cancel</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($petugas as $us): ?>
                                <tr class="">
                                    <td class="text-center">
                                        <?= $i ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $us['username'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $us['role'] ?>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-icon text-danger " data-bs-toggle="tooltip"
                                            title="Delete User"
                                            href="<?= base_url('Admin/set_as_warga/') . $us['username'] ?>">
                                            <span class="btn-inner">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                    <path
                                                        d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                        d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>