
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row flex d-flex align-items-center">
                        <div class="flex d-flex flex-column">
                            <h3>User Analytics</h3> 
                            <span>Year : <?php echo date("Y"); ?></span>
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
                                    <div class="col-lg-5">
                                        <div class="row pt-4 pb-4 text-center">
                                            <div class="col-4 ml-auto b-r">
                                                <span class="fa fa-square text-pink mb-2"></span>
                                                <h4 class="mb-0"><?php echo $this->chart_model->newuser();?></h4>
                                                <span class="">New User</span>
                                                <!-- <div class="text-muted fs12 pt-1">
                                                    <i class="mr-2 fa fa-arrow-up text-success"></i> 3.5%
                                                </div> -->
                                            </div>
                                            <div class="col-4 mr-auto">
                                                <i class="fa fa-square text-primary mb-2"></i>
                                                <h4 class="mb-0">
                                                    <sub class="fs10 text-muted "></sub><?php echo $this->chart_model->daftar();?> 
                                                </h4>
                                                <span class="">Total Participant <?php echo date("Y"); ?></span>
                                                <!-- <div class="text-muted fs12 pt-1">
                                                    <i class="mr-2 fa fa-arrow-up text-success"></i> .5%
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-lg-7">
                                    <div class="flex d-flex flex-column text-center">
                                        <!-- <h2>New User <?php echo date("Y"); ?></h2> -->
                                            <div id="graph"></div>
                                                <!-- Import link -->
                                            </div>
                                </div>
                            </div><!--portlet-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>