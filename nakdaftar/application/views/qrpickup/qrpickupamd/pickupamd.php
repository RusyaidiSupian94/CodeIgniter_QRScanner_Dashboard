<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/bg-amd2.jpg"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            <center>
                            <img src="<?php echo base_url()?>assets/images/logo-amd.png" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">PICKUP<br>ADVANCED MY DOCUMENTS<br><!-- KINI DIBUKA --></h2>

                            <!-- <p style="color:#fff100"><strong>Langkah 2 :</strong> Mohon masukkan No.IC untuk mengesahkan kehadiran.</p> -->
                            </center>

                            <div class="text-error">
                                <?php
                                        echo $this->session->flashdata ("error");
                                    ?>
                                </div>
                           <center>
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                       <label style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">QrCode Scanner <br>Scan HERE!!<!-- KINI DIBUKA --></label>
                                    </div>
                                </div>
                            </center>
                            <center>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--<video id="preview" style="height: 250px; width:500px;"></video>-->
                                         <video id="preview" style="height: 350px; width:350px; align-content: center;"></video> 
                                        <text><div id="message" name="name"></div></text>
                                    </div>
                                </div>
                                <a href="<?php echo base_url(); ?>pickup/index" class='text-primary ml-2 b-b d-inline-block pb-1'><button type="submit" name="insert" class="btn btn-primary btn-block">INSERT MANUALLY</button></a>
                            </center>

                        </div>
                    </div>
                </div>
            </section>
        </main><!--main-content-->