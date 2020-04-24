<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                    <div class="portlet-header flex-row flex d-flex align-items-center b-b text-center">
                        <div class="flex d-flex flex-column">
                            <h2>VIEW INFORMATTION MMD OF <?php echo $updatedatammd['no_siri']; ?></h2> 
                                            <!-- <span class="portlet-subtitle">Easy to read and use form layouts</span> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>NAME: </strong>
                                <!-- <p><?php echo $updatedatammd['name']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatammd['name']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>NRIC: </strong>
                                <!-- <p><?php echo $updatedatammd['nric']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatammd['nric']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>EMAIL: </strong>
                                <!-- <p><?php echo $updatedatammd['nric']; ?></p> -->
                                <p><input type="email" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatammd['email']; ?>"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>PHONE: </strong>
                                <!-- <p><?php echo $updatedatammd['nric']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatammd['phone']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>SIZE OF T-SHIRT: </strong>
                                <!-- <p><?php echo $updatedatammd['size']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatammd['size']; ?>"></p>
                            </div>
                            <div class="col-md-4">
                                <strong>TIKET: </strong>
                                <!-- <p><?php echo $updatedatammd['tiket']; ?></p> -->
                                <p><input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo $updatedatammd['tiket']; ?>"></p>
                            </div>
                        </div>

                        <a href="<?php echo site_url('mmdimport'); ?>" class="btn btn-primary">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>