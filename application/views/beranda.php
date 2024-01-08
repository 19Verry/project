            <div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Hai <?= $user['username'] ?>!</h1>
                                  <p>Selamat Datang <?= $user['username'] ?>.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="<?= base_url('assets/') ?>images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="<?= base_url('assets/') ?>images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="<?= base_url('assets/') ?>images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="<?= base_url('assets/') ?>images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="<?= base_url('assets/') ?>images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="<?= base_url('assets/') ?>images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
            </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div class="row">
   <div class="col-md-12 col-lg-12">
      <div class="row row-cols-1">
         <div class="overflow-hidden d-slider1 ">
            <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total Keluarga</p>
                           <h4 class="counter"><?= $warga ?> Keluarga</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total Cash RT</p>
                           <h4 class="counter"><?= $kasmasuk ?></h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total Pengeluaran</p>
                           <h4 class="counter"><?= $kaskeluar ?></h4>
                        </div>
                     </div>
                  </div>
               </li>
               
            </ul>
            <!-- <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div> -->
         </div>
      </div>
   </div>

      <div class="row">
         <div class="col-md-12">
            <div class="card" data-aos="fade-up" data-aos-delay="800">
               <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                  <div class="header-title">
                     <h4 class="card-title">Pemasukan Uang Kas RT</h4>
                     
                  </div>
                  <div class="d-flex align-items-center align-self-center">
                     <div class="d-flex align-items-center text-primary">
                        <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                           </g>
                        </svg>
                        <div class="ms-2">
                           <span class="text-gray">Ronda</span>
                        </div>
                     </div>
                     <div class="d-flex align-items-center ms-3 text-info">
                        <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                           </g>
                        </svg>
                        <div class="ms-2">
                           <span class="text-gray">Sosial</span>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown">
                     
                  </div>
               </div>
               <div class="card-body">
                  <div id="d-main" class="d-main"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-xl-12">
            <div class="card" data-aos="fade-up" data-aos-delay="900">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Keuangan Bulan Lalu</h4>            
                  </div>   
                  
               </div>
               <div class="card-body">
                  <div class="flex-wrap d-flex align-items-center justify-content-between">
                     <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                     <div class="d-grid gap col-md-4 col-lg-4">
                        <div class="d-flex align-items-start">
                           <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                              <g>
                                 <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                              </g>
                           </svg>
                           <div class="ms-3">
                              <span class="text-gray">Pemasukan</span>
                              <h6>450000</h6>
                           </div>
                        </div>
                        <div class="d-flex align-items-start">
                           <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                              <g>
                                 <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                              </g>
                           </svg>
                           <div class="ms-3">
                              <span class="text-gray">Pengeluaran</span>
                              <h6>176000</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
               
         <div class="col-md-12 col-lg-12">
            <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="mb-2 card-title">Enterprise Clients</h4>
                     <p class="mb-0">
                        <svg class ="me-2 text-primary icon-24" width="24"  viewBox="0 0 24 24">
                           <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                        </svg>
                        15 new acquired this month
                     </p>            
                  </div>
               </div>
               <div class="p-0 card-body">
                  <div class="mt-4 table-responsive">
                     <table id="basic-table" class="table mb-0 table-striped" role="grid">
                        <thead>
                           <tr>
                              <th>COMPANIES</th>
                              <th>CONTACTS</th>
                              <th>ORDER</th>
                              <th>COMPLETION</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="<?= base_url('assets/') ?>images/shapes/01.png" alt="profile">
                                    <h6>Addidis Sportwear</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$14,000</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>60%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                    <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="<?= base_url('assets/') ?>images/shapes/05.png" alt="profile">
                                    <h6>Netflixer Platforms</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$30,000</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>25%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                    <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="<?= base_url('assets/') ?>images/shapes/02.png" alt="profile">
                                    <h6>Shopifi Stores</h6>
                                 </div>
                              </td>
                              <td>                                 
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$8,500</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>100%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-soft-success w-100" style="height: 4px">
                                    <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="<?= base_url('assets/') ?>images/shapes/03.png" alt="profile">
                                    <h6>Bootstrap Technologies</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$20,500</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>100%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-soft-success w-100" style="height: 4px">
                                    <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="<?= base_url('assets/') ?>images/shapes/04.png" alt="profile">
                                    <h6>Community First</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$9,800</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>75%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                    <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>

