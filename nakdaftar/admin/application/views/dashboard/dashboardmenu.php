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
                            <span class="list-title fs-2x  lineH-1"><?php echo $this->chart_model->yghadir();?></span>
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
                            <span class="list-title fs-2x lineH-1"><?php echo $this->chart_model->ygsahkan();?></span>
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
                            <span class="list-title fs-2x  lineH-1"><?php echo $this->chart_model->daftar();?></span>
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