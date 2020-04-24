<div class="page-wrapper" id="page-wrapper" style="background-image: url(<?php echo base_url()?>assets2/images/bg-login.jpg)">

            <main class="content">

                <div class="container flex d-flex">
                    <div class="row flex align-items-center">
                        <div class="col-lg-4 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto">
                            <div class="bg-white shadow-sm overflow-hidden rounded">
                                <div class="p-4 text-center bg-dark-active text-white">
                                    <a href="index.html" class="avatar avatar60 ml-auto mr-auto bg-gradient-primary text-white rounded-circle">  
                                        <i class="icon-Paper-Plane"></i> </a>
                                    <h5 class="text-center h5 pt-10 mb-0 text-white">NAKDAFTAR | CRM</h5>
                                </div>
                                <div class="p-3 pt-30 pb-30">

                                    <form role="form" action="<?php echo base_url()?>login/login_validation" method="POST">
                                        <div class="input-icon-group">
                                            <div class="d-flex flex flex-row">
                                                <label class="flex d-flex mr-auto" for="pass">Username</label>
                                           </div>
                                            <div class="input-icon-append">
                                                <i class="fa fa-user"></i>
                                                <input placeholder="Username" type="text" name="username" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="input-icon-group">
                                           <div class="d-flex flex flex-row">
                                               <label class="flex d-flex mr-auto" for="pass">password</label>
                                           </div>
                                            <div class="input-icon-append">
                                                <i class="fa fa-lock"></i>
                                                <input id="pass" placeholder="Password" type="password" name="password" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="customUi-checkbox  pb-2">
                                            <input id="check-remember" type="checkbox" name="agree">
                                            <label for="check-remember">
                                                <span class="label-checkbox"></span>
                                                <span class="label-helper">Remember Me</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary btn-block btn-lg">Sign In</button>
                                        <div class="pt-20 text-center">
                                            Don't have an account? <a href="#" class="text-primary ml-2 b-b d-inline-block pb-1">Sign Up Here</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- main end-->
                <footer class="content-footer bg-light b-t">
                    <div class="d-flex flex align-items-center pl-15 pr-15">
                        <div class="d-flex flex p-3 mr-auto ml-auto justify-content-center">
                            <div class="text-muted">© Copyright 2018. Nakdaftar v2.4</div>
                        </div>
                    </div>
                </footer><!-- footer end-->
            </main><!-- page content end-->
        </div>