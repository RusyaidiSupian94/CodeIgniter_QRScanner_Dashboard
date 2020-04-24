<div class="page-content d-flex flex">
                    <div class="container-fluid">
                        
                <div class="page-subheader mb-30">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="list">
                                    <div class="list-item pl-0">
                                        <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="list-body">
                                            <div class="list-title fs-2x">
                                                <h3>Statistik SMH April 2019</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>login/dashboard/"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Statistik</li>
                                        <li class="breadcrumb-item active">Seminar My Human</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                        <div class="row">
                            <div class="col-lg-2 mb-30">
                            </div><!--col-->
                            <div class="col-lg-4 mb-30">
                                <div class="bg-gradient-primary bg-primary pt-4 pb-4 rounded shadow-sm">
                                    <img src="<?php echo base_url()?>assets/images/logo-smh.png" alt="" class="img-fluid" style="padding-top:17px;padding-left:30px;padding-right:30px; padding-bottom:17px">
                                    <div class="text-center pt-15">
                                        <h5 class=" mb-0">SEMINAR MY HUMAN</h5>
                                        <span class="text-muted  d-block pb-2">27 APRIL 2019</span>
                                        <div class="clearifx pb-3">
                                            <span class="p-2 text-center d-inline-block ">
                                                <span class="pt-1  fs-1x"><?php echo $this->statistik_smh_model->total_lelaki(); ?></span><br>
                                                <span class="pt-1  fs12 text-muted">Male</span>
                                            </span>
                                            <span class="p-2 text-center d-inline-block ">
                                                <span class="pt-1  fs-1x"><?php echo $this->statistik_smh_model->total_perempuan(); ?></span><br>
                                                <span class="pt-1  fs12 text-muted">Female</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-30">
                                <div class="p-2 pt-3 pb-3 si-colored-facebook text-center rounded mb-10">
                                    <div class="text-center pt-15">

                                        <span class=" fs-3x lineH-1 font300 d-block"><?php echo $this->statistik_smh_model->total_peserta(); ?></span>
                                        <span class=" text-muted fs-1x d-block">Peserta Berdaftar</span>
                                        <i class=" d-block pt-2 fs-2x fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="p-2 pt-3 pb-3 si-colored-twitter text-center rounded">
                                    <div class="text-center pt-15">

                                        <span class=" fs-3x lineH-1 font300 d-block"><?php echo $this->statistik_smh_model->total_hadir(); ?></span>
                                        <span class=" text-muted fs-1x d-block">Peserta Hadir</span>
                                        <i class=" d-block pt-2 fs-2x fa fa-users"></i>
                                    </div>
                                </div>
                            </div><!--col-->
                        </div>


                                            </div>
                                        </div>
                                 </div>