<div class="page-content d-flex flex">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-4 mb-6 col-md-6 mb-30">
                                <div class="list bg-primary shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-primary-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Add-Basket"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $this->mastery_model->total_hadir(); ?></span>
                                            <span style="color:#fff">Jumlah Peserta Hadir</span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-15 pb-15 pl-10 pr-10 bg-primary-active">
                                        <!-- <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i> -->
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
                                            <span class="list-title fs-2x  lineH-1"><?php echo $this->mastery_model->total_hadir(); ?></span>
                                            <span style="color:#fff">Jumlah Peserta Sahkan Kehadiran</span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-15 pb-15 pl-10 pr-10  bg-danger-active">
                                       <!--  View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i> -->
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
                                            <span class="list-title fs-2x  lineH-1"><?php echo $this->mastery_model->total_peserta(); ?></span>
                                            <span style="color:#fff">Jumlah Peserta Keseluruhan</span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-15 pb-15 pl-10 pr-10  bg-success-active">
                                       <!--  View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i> -->
                                    </a>
                                </div>
                            </div><!--col-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="portlet-box portlet-fullHeight border0 shadow-sm mb-30">
                                    <div class="portlet-header flex-row flex d-flex align-items-center">
                                        <div class="flex d-flex flex-column">
                                            <h3>User Analytics</h3> 
                                            <span>Last Week</span>
                                        </div>
                                        <div class="portlet-tools">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-sync"></i></a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portlet-body pt-0">
                                        <div class="row align-items-center">
                                            <div class='col-lg-5'>
                                                <div class="row pt-4 pb-4 text-center">
                                                    <div class="col-4 ml-auto b-r">
                                                        <span class="fa fa-square text-pink-light mb-2"></span>
                                                        <h4 class="mb-0"><?php echo $this->mastery_model->total_peserta(); ?></h4>

                                                        <span class="">New Participants</span>
                                                    </div>
                                                    <div class="col-4 mr-auto">
                                                        <i class='fa fa-square text-primary mb-2'></i>
                                                        <h4 class="mb-0"><sub class="fs10 text-muted"></sub> 721</h4>
                                                        <span class="">Total Participants</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-lg-7'>
                                                    
                                                    <div id="graph"></div>
                                                
                                                <!--<canvas id="lineChart" height="130"></canvas>-->
                                            </div>
                                        </div><!--portlet-->
                                    </div>
                                </div>
                            </div><!--col-->

                        </div>


                        </div>
                    </div>
                </div>