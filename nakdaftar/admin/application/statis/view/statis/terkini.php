<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center mb-20">
                        <div class="flex d-flex flex-column text-center">
                            <h3><strong><h3>Terkini</strong></h3>
                        </div>
                    </div>

                    <!-- <div class="dropdown-divider mb-20"></div> -->
                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-users fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count();?></span>
                                        <span class="list-content">Jumlah Customer Peserta Dalam Dewan</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->
                    </div>

                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-users fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count();?></span>
                                        <span class="list-content">Jumlah Peserta</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-6 col-md-6">
                            <div class="list-alt bg-warning shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-users fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_hadir();?></span>
                                        <span class="list-content">Jumlah Peserta Disahkan</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->
                    </div>

                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-male fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_male();?></span>
                                        <span class="list-content">Jumlah Lelaki</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-6 col-md-6">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-female fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_female();?></span>
                                        <span class="list-content">Jumlah Wanita</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>