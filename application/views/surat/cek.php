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
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Upload Surat Pengajuan</h4>
                            <p class="text-center" style="width: 100%;">
                                <?= $this->session->flashdata('message'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="table-responsive p-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Uploader</th>
                                        <th class="text-center">Tanggal Pengajuan</th>
                                        <th class="text-center">Download Surat</th>
                                        <th class="text-center">Upload</th>
                                        <th class="text-center">kirim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($role as $us): ?>
                                        <form action="<?= base_url('Surat/edit') ?>" method="post" enctype="multipart/form-data">
                                            <tr class="">
                                                <td class="text-center">
                                                    <input type="hidden" name="id" value="<?= $us['id'] ?>" >
                                                    <?= $i ?>
                                                </td>
                                                <td class="text-center">
                                                    <?= $us['uploader'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <?= $us['waktuunggah'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <a class="linkdownload"
                                                        href="../assets/file/<?= $us['file'] ?>">Download
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4"
                                                                d="M18.8089 9.021C18.3574 9.021 17.7594 9.011 17.0149 9.011C15.199 9.011 13.7059 7.508 13.7059 5.675V2.459C13.7059 2.206 13.503 2 13.2525 2H7.96436C5.49604 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59109 22 8.1703 22H16.0455C18.5059 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6238 9.016 19.1168 9.021 18.8089 9.021Z"
                                                                fill="currentColor" />
                                                            <path opacity="0.4"
                                                                d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1732 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M15.1052 12.7088C14.8132 12.4198 14.3432 12.4178 14.0512 12.7108L12.4622 14.3078V9.48084C12.4622 9.06984 12.1282 8.73584 11.7172 8.73584C11.3062 8.73584 10.9722 9.06984 10.9722 9.48084V14.3078L9.38224 12.7108C9.09124 12.4178 8.62024 12.4198 8.32924 12.7088C8.03724 12.9988 8.03724 13.4698 8.32624 13.7618L11.1892 16.6378H11.1902C11.2582 16.7058 11.3392 16.7608 11.4302 16.7988C11.5202 16.8358 11.6182 16.8558 11.7172 16.8558C11.8172 16.8558 11.9152 16.8358 12.0052 16.7978C12.0942 16.7608 12.1752 16.7058 12.2432 16.6388L12.2452 16.6378L15.1072 13.7618C15.3972 13.4698 15.3972 12.9988 15.1052 12.7088Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </a>
                                                </td>

                                                <td class="text-center">
                                                    <input type="file" class="custom-file-input form-control" name="file"
                                                        id="file" value="<?= set_value('file') ?>">
                                                    <?= form_error('file', '<small class="text-danger pl-3">', '</small>') ?>
                                                </td>
                                                <td class="text-center">
                                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                </td>
                                            </tr>
                                        </form>
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
</div>