<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                        <div class="flex d-flex flex-column text-center">
                            <h3>UPDATE FORM MMF <?php echo $updatedatammf['no_siri']; ?> </h3>
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
                                    <form action="" method="post" ><!--------action="<?php echo base_url('CSVcodex/edit'); ?>"--->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>NO SIRI</label>
                                                <input type="text" class="form-control" name="no_siri" placeholder="" value="<?php echo !empty($updatedatammf['no_siri'])?$updatedatammf['no_siri']:''; ?>" >
                                                <?php echo form_error('no_siri','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>NAME</label>
                                                <input type="text" class="form-control" name="name" placeholder="ENTER YOUR NAME" value="<?php echo !empty($updatedatammf['name'])?$updatedatammf['name']:''; ?>" >
                                                <?php echo form_error('name','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>EMAIL</label>
                                                <input type="email" class="form-control" name="email" placeholder="" value="<?php echo !empty($updatedatammf['email'])?$updatedatammf['email']:''; ?>" >
                                                <?php echo form_error('email','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" name="phone" placeholder="ENTER YOUR PHONE" value="<?php echo !empty($updatedatammf['phone'])?$updatedatammf['phone']:''; ?>" >
                                                <?php echo form_error('phone','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>NRIC</label>
                                                <input type="text" class="form-control" name="nric" placeholder="ENTER YOUR NRIC" value="<?php echo !empty($updatedatammf['nric'])?$updatedatammf['nric']:''; ?>" >
                                                <?php echo form_error('nric','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">SIZE T-SHIRT</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="size">
                                                        <option value="<?php echo !empty($updatedatammf['size'])?$updatedatammf['size']:''; ?>">Select your size ( <?php echo $updatedatammf['size']; ?> )</option>
                                                        <option value="NA">NON AVAILABLE</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                        <option value="XXXL">XXXL</option>
                                                    </select>
                                                    <?php echo form_error('size','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">TIKET</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="tiket">
                                                        <option value="<?php echo !empty($updatedatammf['tiket'])?$updatedatammf['tiket']:''; ?>">Select your tiket ( <?php echo $updatedatammf['tiket']; ?> )</option>
                                                        <option value="NA">NON AVAILABLE</option>
                                                        <option value="FREE">FREE</option>
                                                        <option value="GENEREL">GENEREL</option>
                                                        <option value="VIP">VIP</option>
                                                        <option value="VVIP">VVIP</option>
                                                    </select>
                                                    <?php echo form_error('tiket','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <a href="<?php echo site_url('mmfimport'); ?>" class="btn btn-secondary">Back</a>
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



