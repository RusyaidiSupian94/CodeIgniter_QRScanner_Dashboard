<div class="page-wrapper" id="page-wrapper">
    <main class="content">
        <div class="container flex d-flex">
            <div class='row flex align-items-center'>
                <div class='col-lg-7 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto'>
                    <div class="bg-white shadow-sm overflow-hidden rounded">
                        <div class="p-4 text-center bg-dark-active text-white">
                            <!-- <a href="index.html" class="avatar avatar60 ml-auto mr-auto bg-gradient-primary text-white rounded-circle">  
                                <i class="icon-Paper-Plane"></i> </a> -->
                            <h5 class='text-center h5 pt-10 mb-0 text-white'>Daftarkan Pekerja Anda</h5>
                        </div>
                        <?php
                            if(validation_errors()){
                        ?>
                                <div class="alert alert-info text-center">
                        <?php echo validation_errors(); ?>
                                </div>
                        <?php
                            }
 
                            if($this->session->flashdata('message')){
                        ?>
                                <div class="alert alert-info text-center">
                        <?php echo $this->session->flashdata('message'); ?>
                                </div>
                        <?php
                            }   
                        ?>

                    <div class="row no-margin bg-light justify-content-center py-3">

                        <form  action="<?php echo base_url();?>/authv2/register" method="POST"><!--role="form"-->
                                            
                            <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i class="fa fa-user"></i>
                                    <input id="name" name="name_emp" placeholder="Name of Employee" type="text" class="form-control" required="" value="<?php echo set_value('name_emp'); ?>">
                                </div>
                            </div>

                            <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i class="fa fa-envelope"></i>
                                    <input id="email" name="email_emp" placeholder="Email" type="text" class="form-control" required="" value="<?php echo set_value('email_emp'); ?>">
                                </div>
                            </div>

                            <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i class="far fa-building"></i>
                                    <input id="department_emp" name="department_emp" placeholder="Department" type="text" class="form-control" required="" value="<?php echo set_value('department_emp'); ?>">
                                </div>
                            </div>

                            <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i class="far fa-id-card"></i>
                                    <input id="position_emp" name="position_emp" placeholder="Job Position" type="text" class="form-control" required="" value="<?php echo set_value('position_emp'); ?>">
                                </div>
                            </div>

                            <!-- <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i class="fas fa-phone"></i>
                                    <input id="phone" name="phone" placeholder="Phone" type="text" class="form-control" required="" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                                </div>
                            </div> -->

                            
                            <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i class="fas fa-venus-mars"></i>
                                    <div class="custom-control custom-radio custom-control-inline mx-5">
                                        <input type="radio" id="gender_emp1" name="gender_emp" class="custom-control-input" value="male" <?php echo empty($auth_model['gender_emp']) || (!empty($auth_model['gender_emp']) && ($auth_model['gender_emp'] == 'male'))?'checked="checked"':''; ?> >
                                        <label class="custom-control-label" for="gender_emp1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline mx-5">
                                        <input type="radio" id="gender_emp2" name="gender_emp" class="custom-control-input" value="female" <?php echo (!empty($auth_model['gender_emp']) && ($auth_model['gender_emp'] == 'female'))?'checked="checked"':''; ?> >
                                        <label class="custom-control-label" for="gender_emp2">Female</label>
                                    </div>
                                </div>    
                            </div>

                            <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                                    <input id="password" name="password_emp" placeholder="Password Employee" type="password" class="form-control" required="" value="<?php echo set_value('password_emp'); ?>" >     
                                </div>
                            </div>

                            <!-- <div class="input-icon-group form-group">
                                <div class='input-icon-append'>
                                    <i toggle="#password" class="fas fa-lock field-icon toggle-password"></i>
                                    <input id="password" name="password_confirm" placeholder="Confirm your password" type="password" class="form-control" required="" value="<?php echo set_value('password_confirm'); ?>">
                                </div>
                            </div> -->

                            <div class="form-group  pb-2">
                                <span class="label-helper  fs12 text-muted">
                                                    By Creating an Account you Agree to our
                                    <a href="#" class="b-b pb-1 text-primary">Terms and Conditions</a> and our <a href="#" class="b-b pb-1 text-primary">Privacy Policy</a>.
                                </span>
                                <button type="submit" class="btn btn-primary btn-block ml-auto btn-rounded btn-lg mt-20">Daftar</button><!---name="regisSubmit"--->
                            </div>
                                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   