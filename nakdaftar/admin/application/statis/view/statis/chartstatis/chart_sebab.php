<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center mb-20">
                        <div class="flex d-flex flex-column text-center">
                            <h3><strong><h3>Kenapa Hadir Program Byond</strong></h3>
                        </div>
                    </div>

                    <!-- <div class="dropdown-divider mb-20"></div> -->
                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-building fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_problem();?></span>
                                        <span class="list-content">Menyelesaikan Masalah Pengurusan</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-chart-line fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_upsale();?></span>
                                        <span class="list-content">Menaikan Jualan Syarikat</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="fas fa-wifi fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_networking();?></span>
                                        <span class="list-content">Menambah Jaringan(Networking)</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->

                        <div class="col-lg-3 col-md-12">
                            <div class="list-alt bg-danger shadow-sm rounded mb-10">
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <i class="far fa-handshake fs-2x"></i>
                                    </div>
                                    <div class="list-body text-right">
                                        <span class="list-title fs-1x"><?php echo $this->crud->count_abdulbasit();?></span>
                                        <span class="list-content">Sesi Bersama Tuan Basit</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-->
                    </div>

                    <div class="portlet-body d-flex justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div id="graph10"></div>
                            <div id="graph11"></div>
                        </div><!--col-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>