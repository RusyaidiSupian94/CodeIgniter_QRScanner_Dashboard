<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                        <div class="flex d-flex flex-column text-center">
                            <h3>REGISTER CUSTOMER RCM</h3>
                        </div>
                    </div>
                    <div class="portlet-body flex-row b-b flex d-flex align-items-center">
                        <div class="flex d-flex flex-column">
                                <!-- <h2><?php echo $title; ?></h2> -->
    
                            <!-- Display status message -->
                            <?php if(!empty($success_msg)){ ?>
                            <div class="col-xs-12">
                                <div class="alert alert-success"><?php echo $success_msg; ?></div>
                            </div>
                            <?php }else if(!empty($error_msg)){ ?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                            </div>
                            <?php } ?>
    
                            <div class="row">

                                <div class="col-md-12">
                                    <form method="post" ><!--------action="<?php echo base_url('CSVcodex/edit'); ?>"--->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>NOMBOR SIRI</label>
                                                <input type="text" class="form-control" name="no_siri" placeholder="ENTER YOUR NUMBER SIRI" value="" required="" ><!-- <?php echo !empty($updatedata['no_siri'])?$updatedata['no_siri']:''; ?> -->
                                                <?php echo form_error('no_siri','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>NAME</label>
                                                <input type="text" class="form-control" name="name" placeholder="ENTER YOUR NAME" value="" ><!-- <?php echo !empty($updatedata['name'])?$updatedata['name']:''; ?> -->
                                                <?php echo form_error('name','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>EMAIL</label>
                                                <input type="text" class="form-control" name="email" placeholder="ENTER YOUR EMAIL" value="" >
                                                <?php echo form_error('email','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>NRIC</label>
                                                <input type="text" class="form-control" name="nric" placeholder="ENTER YOUR NRIC" value="" >
                                                <?php echo form_error('nric','<span class="help-block">','</span>'); ?>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" name="phone" placeholder="ENTER YOUR PHONE NUMBER" value="" >
                                                <?php echo form_error('phone','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">INCOME</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="income">
                                                        <option value=" ">PILIH INCOME</option>
                                                        <option value="NA">NOT AVAILABLE</option>
                                                        <option value="1">1 = ( 0 - RM10,000 )</option>
                                                        <option value="2">2 = ( RM10,000 - RM30,000 )</option>
                                                        <option value="3">3 = ( RM30,000 - RM50,000 )</option>
                                                        <option value="4">4 = ( RM50,000 - RM100,000 )</option>
                                                        <option value="5">5 = ( RM100,000 - RM500,000 )</option>
                                                        <option value="6">6 = ( RM500,000 KE ATAS )</option>

                                                    </select>
                                                    <?php echo form_error('income','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <a href="<?php echo site_url('rcmimport'); ?>" class="btn btn-secondary">Back</a>
                                        <input type="submit" name="memSubmit" class="btn btn-success" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



