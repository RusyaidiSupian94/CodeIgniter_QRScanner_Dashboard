<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center mb-20">
                        <div class="flex d-flex flex-column text-center">
                            <h3><strong><h3>Jumlah Pendapatan</strong></h3>
                        </div>
                    </div>

                    <!-- <div class="dropdown-divider mb-20"></div> -->
                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-dollar-sign fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_0k();?></span>
                                        <span class="list-content">RM0 - RM10K</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-dollar-sign fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_10k();?></span>
                                        <span class="list-content">RM10K - RM30</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-dollar-sign fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_30k();?></span>
                                        <span class="list-content">RM30 - RM50K</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->
                    </div>

                    <!-- <div class="dropdown-divider mb-20"></div> -->
                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-dollar-sign fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_50k();?></span>
                                        <span class="list-content">RM50K - RM100K</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-dollar-sign fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_100k();?></span>
                                        <span class="list-content">RM100K - RM500K</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-primary shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-dollar-sign fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_500k();?></span>
                                        <span class="list-content">RM500K</span>
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