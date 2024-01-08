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
                    <h3 class="card-title">Menambahkan Informasi RT</h3>
                    <p class="text-center" style="width: 100%;">
                        <?= $this->session->flashdata('message'); ?>
                    </p>
                </div>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label" for="judul">Judul:</label>
                                <input type="text" class="form-control" id="judul" placeholder=" Masukkan Judul"
                                    name="judul" value="<?= set_value('judul') ?>">
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label" for="isi">Isi Informasi:</label>
                                <textarea class="form-control" id="isi" rows="5" placeholder="Masukkan Isi Informasi"  name="isi" value="<?= set_value('isi') ?>"></textarea>
                                <?= form_error('isi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>