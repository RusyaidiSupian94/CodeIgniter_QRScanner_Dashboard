<main class="content">
                
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
                                                <h3>Mastery My Finance April 2019</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>login/dashboard/"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Database</li>
                                        <li class="breadcrumb-item active">Mastery My Finance</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-12 mb-30">

                                    <div class="portlet-body no-padding">
                                        
                                        <?php 
                                        foreach($css_files as $file): ?>
                                            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
                                        <?php endforeach; ?>

                                            
                                            <div class="container">

                                            <div style='height:20px;'></div>  
                                            <div style="padding: 10px">
                                                <?php echo $output; ?>
                                            </div>
                                            <?php foreach($js_files as $file): ?>
                                                <script src="<?php echo $file; ?>"></script>
                                            <?php endforeach; ?>
                                            </div>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>