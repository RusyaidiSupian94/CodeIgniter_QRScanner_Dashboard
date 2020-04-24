<div class="page-wrapper" id="page-wrapper">

            <main class="content">

                <div class="container flex d-flex">
                    <div class='row flex align-items-center'>
                        <div class='col-lg-4 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto'>
                            <div class="bg-white shadow-sm overflow-hidden rounded">
                                <div class="p-4 text-center bg-dark-active text-white">
                                    <!-- <a href="index.html" class="avatar avatar60 ml-auto mr-auto bg-gradient-primary text-white rounded-circle">  
                                        <i class="icon-Paper-Plane"></i> </a> -->
                                    <h5 class='text-center h5 pt-10 mb-0 text-white'>Selamat Datang, Sila Login.</h5>
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
                                    <?php
                                        if(!empty($success_msg)){
                                            echo '<p class="statusMsg">'.$success_msg.'</p>';
                                        }elseif(!empty($error_msg)){
                                            echo '<p class="statusMsg">'.$error_msg.'</p>';
                                        }
                                    ?>

                                </div>
                                <div class="p-3 pt-30 pb-30">

                                    <form role="form" action="" method="post">
                                        <div class="input-icon-group">
                                            <div class="d-flex flex flex-row">
                                                <label class="flex d-flex mr-auto" for='pass'>Username</label>
                                            <div class="flex d-flex ml-auto justify-content-end">
                                                <a href="#" class="text-primary fs12">Remind Me</a>
                                            </div>
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-user"></i>
                                                <input placeholder="Email" name="email_emp" id="email_emp" type="email_emp" class="form-control" required="" value="">
                                               <?php echo form_error('email_emp','<span class="help-block">','</span>'); ?>
                                            </div>
                                        </div>
                                        <div class="input-icon-group">
                                           <div class="d-flex flex flex-row">
                                               <label class="flex d-flex mr-auto" for='pass'>password</label>
                                            <div class="flex d-flex ml-auto justify-content-end">
                                                <a href="#" class="text-primary fs12">Forget</a>
                                            </div>
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-lock"></i>
                                                <input id="password_emp" placeholder="Password" name="password_emp" required="" type="password" class="form-control">
                                                <?php echo form_error('password_emp','<span class="help-block">','</span>'); ?>
                                            </div>
                                        </div>
                                        <div class="customUi-checkbox  pb-2">
                                            <input id="check-remember" type="checkbox" name="agree">
                                            <label for="check-remember">
                                                <span class="label-checkbox"></span>
                                                <span class="label-helper">Remember Me</span>
                                            </label>
                                        </div>
                                        <button type="submit" name="loginSubmit" value="Submit" class="btn btn-gradient-primary btn-block btn-lg">Sign In</button>
                                        <div class="pt-20 text-center">
                                            Don't have an account? <a href="<?php echo base_url(); ?>Login/register" class='text-primary ml-2 b-b d-inline-block pb-1'>Sign Up Here</a>
                                        </div>
                                        <!-- <ul class="list-unstyled">
                                            <li class="text-center pt-20 pb-20">
                                                <div class="title-sep sep-white">
                                                    <span>Or </span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="btn btn-social btn-border-o btn-icon btn-block  si-colored-facebook mr-2 mb-2">
                                                    <i class="fab fa-facebook-f"></i> Sign In with Facebook
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="btn btn-social btn-border-o btn-icon btn-block  si-colored-g-plus mr-2 mb-2">
                                                    <i class="fab fa-google-plus-g"></i> Sign In with Google+
                                                </a>
                                            </li>
                                        </ul> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>