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
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Pengajuan Surat</h4>
                            <p class="text-center" style="width: 100%;">
                                <?= $this->session->flashdata('message'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="form-wizard1" class="mt-3 text-center">




                            <!-- fieldsets -->
                            <fieldset>
                                
                                <form action="<?= base_url('Surat/tambah') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-card text-start">
                                        <div class="row">

                                            <div class="col-md-12 text-end is1">

                                                <div class="form-group">
                                                    <a class="linkdownload text-end "
                                                        href="<?= base_url('Surat/download') ?>">
                                                        Unduh Template Surat Pengatar
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4"
                                                                d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 is1">
                                                <div class="form-group">
                                                    <label class="form-label">Upload Surat Wajib Format DOCX: *</label>
                                                    <input type="file" class="custom-file-input form-control"
                                                        name="file" id="file" required>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="next"
                                        class="btn btn-primary next action-button float-end" value="Next">Next</button>
                                </form>
                            </fieldset>

                            <!-- <fieldset>
                                <div class="form-card text-start">
                                    <dxiv class="row">
                                        <div class="col-7">
                                            <h3 class="mb-4">Personal Information:</h3>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </dxiv>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">First Name: *</label>
                                                <input type="text" class="form-control" name="fname"
                                                    placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Last Name: *</label>
                                                <input type="text" class="form-control" name="lname"
                                                    placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact No.: *</label>
                                                <input type="text" class="form-control" name="phno"
                                                    placeholder="Contact No." />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Alternate Contact No.: *</label>
                                                <input type="text" class="form-control" name="phno_2"
                                                    placeholder="Alternate Contact No." />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" name="next" class="btn btn-primary next action-button float-end"
                                    value="Next">Next</button>
                                <button type="button" name="previous"
                                    class="btn btn-dark previous action-button-previous float-end me-1"
                                    value="Previous">Previous</button>
                            </fieldset>
                            <fieldset>
                                <div class="form-card text-start">
                                    <div class="row">
                                        <div class="col-7">
                                            <h3 class="mb-4">Image Upload:</h3>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Upload Your Photo:</label>
                                        <input type="file" class="form-control" name="pic" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Upload Signature Photo:</label>
                                        <input type="file" class="form-control" name="pic-2" accept="image/*">
                                    </div>
                                </div>
                                <button type="button" name="next" class="btn btn-primary next action-button float-end"
                                    value="Submit">Submit</button>
                                <button type="button" name="previous"
                                    class="btn btn-dark previous action-button-previous float-end me-1"
                                    value="Previous">Previous</button>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h3 class="mb-4 text-left">Finish:</h3>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div>
                                    <br><br>
                                    <h2 class="text-center text-success"><strong>SUCCESS !</strong></h2>
                                    <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="../../assets/images/pages/img-success.png"
                                                class="img-fluid" alt="fit-image"> </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="text-center col-7">
                                            <h5 class="text-center purple-text">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <td>
    <a target="_blank" href="../file/lpj/<?= $m['lpj'] ?>"><i class='bx bx-show-alt'></i></a> |
    <a download="<?= $m['lpj'] ?>" href="../file/lpj/<?= $m['lpj'] ?>"><i class='bx bxs-download ms-1'></i></a>
</td> -->