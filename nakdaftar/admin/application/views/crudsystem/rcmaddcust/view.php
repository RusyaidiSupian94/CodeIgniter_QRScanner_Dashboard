<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                    <div class="portlet-header flex-row flex d-flex align-items-center b-b text-center">
                        <div class="flex d-flex flex-column">
                            <h2>VIEW INFORMATTION OF <?php echo $updatedatarcm['no_siri']; ?></h2> 
                                            <!-- <span class="portlet-subtitle">Easy to read and use form layouts</span> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>NAME: </strong>
                                <!-- <p><?php echo $updatedatarcm['name']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['name']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>EMAIL: </strong>
                                <!-- <p><?php echo $updatedatarcm['email']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['email']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>NRIC: </strong>
                                <!-- <p><?php echo $updatedatarcm['nric']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['nric']; ?>"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>PHONE NUMBER: </strong>
                                <!-- <p><?php echo $updatedatarcm['phone']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['phone']; ?>"></p>
                            </div>
                            
                            <div class="col-md-4">
                                <strong>GENDER: </strong>
                                <!-- <p><?php echo $updatedatarcm['gender']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['gender']; ?>"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>STATE: </strong>
                                <!-- <p><?php echo $updatedatarcm['state']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['state']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>COMPANY NAME: </strong>
                                <!-- <p><?php echo $updatedatarcm['company']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['company']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>INDUSTRY: </strong>
                                <!-- <p><?php echo $updatedatarcm['industry']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['industry']; ?>"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>STATUS: </strong>
                                <!-- <p><?php echo $updatedatarcm['status']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['status']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>JAWATAN DISANDANG: </strong>
                                <!-- <p><?php echo $updatedatarcm['working']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['working']; ?>"></p>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>FUNNEL: </strong>
                                <!-- <p><?php echo $updatedatarcm['funnel']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['funnel']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>SEBAB HADIR: </strong>
                                <!-- <p><?php echo $updatedatarcm['interest']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['interest']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>INCOME: </strong>
                                <!-- <p><?php echo $updatedatarcm['income']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatarcm['income']; ?>"></p>
                            </div>
                        </div>
                        <a href="<?php echo site_url('rcmimport'); ?>" class="btn btn-primary">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>