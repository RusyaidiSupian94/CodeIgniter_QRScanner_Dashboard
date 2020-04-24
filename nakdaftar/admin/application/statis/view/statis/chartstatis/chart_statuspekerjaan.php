<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center mb-20">
                        <div class="flex d-flex flex-column text-center">
                            <h3><strong><h3>Status Pekerja</strong></h3>
                        </div>
                    </div>

                    <!-- <div class="dropdown-divider mb-20"></div> -->
                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-user-secret fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_majikan();?></span>
                                        <span class="list-content">Majikan</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-user-md fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_leader();?></span>
                                        <span class="list-content">Ketua Jabatan/Pengurus</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-4 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-user fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_pekerja();?></span>
                                        <span class="list-content">Pekerja</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->
                    </div>


                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div id="graph6"></div>
                            <div id="graph7"></div>
                        </div><!--col-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>