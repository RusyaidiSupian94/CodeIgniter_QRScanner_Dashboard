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
                                                <h3>Seminar My Human April 2019</h3>
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
                                        <li class="breadcrumb-item active">Seminar My Human</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content d-flex flex">
                    <div class="container-fluid">
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