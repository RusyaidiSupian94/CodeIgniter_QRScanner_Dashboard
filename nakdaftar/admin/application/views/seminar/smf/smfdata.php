<div class="row d-flex justify-content-center">
    <div class="col-lg-4 mb-20">
        <div class=" rounded shadow-sm" style="background: #ff6600"><!--bg-gradient-primary bg-primary--->
            <img src="<?php echo base_url();?>assets/images/smf.png" alt="" class="img-fluid  ml-auto mr-auto d-block p-4">
            <div class="text-center text-white">
                <h5 class=" mb-0">SEMINAR MY FINANCE</h5>
                <span class="text-muted  d-block pb-2">3 OGOS <?php echo date("Y"); ?></span>
                <div class="clearifx pb-3">
                    <span class="p-2 text-center d-inline-block ">
                        <span class="pt-1  fs-1x"><?php echo $this->modelsmf->smfgenderL();?></span><br>
                        <span class="pt-1  fs12 text-muted">Male</span>
                    </span>
                    <span class="p-2 text-center d-inline-block ">
                        <span class="pt-1  fs-1x"><?php echo $this->modelsmf->smfgenderP();?></span><br>
                        <span class="pt-1  fs12 text-muted">Female</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!--col-->
    <div class="col-lg-4 mb-20 text-white">
        <div class="p-2  text-center rounded mb-15" style="background: #ff6600"><!---#ff8533-si-colored-facebook--->
            <div class="text-center pt-15">

                <span class=" fs-3x lineH-1 font300 d-block"><?php echo $this->modelsmf->smfdaftar();?></span>
                <span class=" text-muted fs-1x d-block">Peserta Berdaftar</span>
                <i class="d-block pt-1 fs-2x fas fa-users"></i>
            </div>
        </div>
        <div class="p-2 text-center rounded" style="background: #ff8533"><!-- si-colored-twitter---->
            <div class="text-center pt-15">

                <span class=" fs-3x lineH-1 font300 d-block"><?php echo $this->modelsmf->smfhadir();?></span>
                <span class=" text-muted fs-1x d-block">Peserta Hadir</span>
                <i class="d-block pt-1 fs-2x fas fa-users"></i>
            </div>
        </div>
    </div><!--col-->
</div>


<div class="page-content mb-20">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4 mb-6 col-md-6 mb-30">
                <div class="list bg-primary shadow-sm rounded overflow-hidden">
                    <div class="list-item">
                        <div class="list-thumb bg-primary-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                            <i class="icon-Add-Basket"></i>
                        </div>
                        <div class="list-body text-right">
                            <span class="list-title fs-2x  lineH-1"><?php echo $this->chart_model->yghadirsmf();?></span>
                            <span >Jumlah Peserta Hadir</span><!--class="list-content text-primary-light fs14"--->
                        </div>
                    </div>
                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-primary-active text-primary-active">
                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                    </a>
                </div>
            </div><!--col-->
            <div class="col-lg-4 mb-6 col-md-6 mb-30">
                <div class="list bg-danger shadow-sm rounded overflow-hidden">
                    <div class="list-item">
                        <div class="list-thumb bg-danger-active text-danger-light avatar rounded-circle avatar60 shadow-sm">
                            <i class="icon-Remove-Basket"></i>
                        </div>
                        <div class="list-body text-right">
                            <span class="list-title fs-2x lineH-1"><?php echo $this->chart_model->ygsahkansmf();?></span>
                            <span>Jumlah Peserta Sahkan Kehadiran</span>
                        </div>
                    </div>
                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-danger-active text-danger-active">
                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                    </a>
                </div>
            </div><!--col-->
            <div class="col-lg-4 mb-6 col-md-6 mb-30">
                <div class="list bg-success shadow-sm rounded overflow-hidden">
                    <div class="list-item">
                        <div class="list-thumb bg-success-active text-success-light avatar rounded-circle avatar60 shadow-sm">
                            <i class="icon-Money-Bag"></i>
                        </div>
                        <div class="list-body text-right">
                            <span class="list-title fs-2x  lineH-1"><?php echo $this->chart_model->daftarsmf();?></span>
                            <span>Jumlah Peserta Keseluruhan</span>
                        </div>
                    </div>
                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-success-active text-success-active">
                        View Detail <i class="fa fa-chevron ml-2 fs12 mt-1"></i>
                    </a>
                </div>
            </div><!--col-->
        </div>

    </div>
    <div class="dropdown-divider"></div>

</div>

