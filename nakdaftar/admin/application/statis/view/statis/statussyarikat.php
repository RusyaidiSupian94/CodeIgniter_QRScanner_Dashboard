<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center mb-20">
                        <div class="flex d-flex flex-column text-center">
                            <h3><strong><h3>Status Syarikat</strong></h3>
                        </div>
                    </div>

                    <!-- <div class="dropdown-divider mb-20"></div> -->
                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-success shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-building fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_sdn();?></span>
                                        <span class="list-content">SDN BHD</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-success shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-industry fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_ent();?></span>
                                        <span class="list-content">Enterprise</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-success shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="far fa-hospital fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_ngo();?></span>
                                        <span class="list-content">NGO</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-success shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-home fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_belomdaftar();?></span>
                                        <span class="list-content">Belum Daftar</span>
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