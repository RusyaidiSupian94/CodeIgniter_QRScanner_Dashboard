<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                        <div class="flex d-flex flex-column text-center">
                            <h3>REGISTER CUSTOMER SMH</h3>
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
                                    <form method="post" >
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>NO SIRI</label>
                                                <input type="text" class="form-control" name="no_siri" placeholder="ENTER YOUR NO SIRI" value="" required="" >
                                                <?php echo form_error('no_siri','<span class="help-block">','</span>'); ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>NAME</label>
                                                <input type="text" class="form-control" name="name" placeholder="ENTER YOUR NAME" value="" required="" >
                                                <?php echo form_error('name','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>NRIC</label>
                                                <input type="text" class="form-control" name="nric" placeholder="ENTER YOUR NRIC" value="" required="" >
                                                <!-- <?php echo form_error('nric','<div class="invalid-feedback">','</div>'); ?> -->
                                                <?php echo form_error('nric','<span class="help-block">','</span>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>EMAIL</label>
                                                <input type="text" class="form-control" name="email" placeholder="ENTER YOUR EMAIL" value="" required="" >
                                                <?php echo form_error('email','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" name="phone" placeholder="ENTER YOUR PHONE NUMBER" value="" required="" >
                                                <?php echo form_error('phone','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">TIKET</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="tiket">
                                                        <option value=" ">PILIH TIKET</option>
                                                        <option value="FREE">FREE</option>
                                                        <option value="GENEREL">GENEREL</option>
                                                        <option value="VIP">VIP</option>
                                                        <option value="VVIP">VVIP</option>
                                                    </select>
                                                    <?php echo form_error('tiket','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">KAUNTER</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="kaunter">
                                                        <option value=" ">Select Your Kaunter</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                    <?php echo form_error('kaunter','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">INCOME</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="income">
                                                        <option value=" ">PILIH INCOME</option>
                                                        <option value="NA">Non Available</option>
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
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Saiz Baju</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="size">
                                                        <option value=" ">PILIH SAIZ BAJU</option>
                                                        <option value="NA">NA</option>
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
                                        </div>
                                    
                                        <a href="<?php echo site_url('smhimport'); ?>" class="btn btn-secondary">Back</a>
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



