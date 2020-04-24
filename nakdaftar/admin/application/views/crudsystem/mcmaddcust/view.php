<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                    <div class="portlet-header flex-row flex d-flex align-items-center b-b text-center">
                        <div class="flex d-flex flex-column">
                            <h2>VIEW INFORMATTION MCM OF <?php echo $updatedatamcm['no_siri']; ?></h2> 
                                            <!-- <span class="portlet-subtitle">Easy to read and use form layouts</span> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>NAME: </strong>
                                <!-- <p><?php echo $updatedatamcm['name']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatamcm['name']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>NRIC: </strong>
                                <!-- <p><?php echo $updatedatamcm['nric']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatamcm['nric']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>EMAIL: </strong>
                                <!-- <p><?php echo $updatedatamcm['nric']; ?></p> -->
                                <p><input type="email" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatamcm['email']; ?>"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>PHONE: </strong>
                                <!-- <p><?php echo $updatedatamcm['nric']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatamcm['phone']; ?>"></p>
                            </div>
                        </div>

                        <a href="<?php echo site_url('mcmimport'); ?>" class="btn btn-primary">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>