<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/rahsia-ceramah-memukau-1024x576.png"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto text">
                            <center>
                            <a href="<?php echo base_url()?>rcm/logout">
                            <img src="<?php echo base_url()?>assets/images/rcm.png" width="80%" class="img-fluid mb30">

                            <div class=" alert-success alert mb60">
                            <p>Kehadiran anda ke <b>SEMINAR RAHSIA CERAMAH MEMUKAU telah disahkan</b>.<br>Mohon SCREENSHOT INFO di bawah.</p></div>
                            <div class="alert alert-info text-center">
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                            </center>
                            
                            <div class="row">
                            <div class="col-lg-12">

                            

                            <div class="col-lg-8 mr-auto ml-auto text" style="border-style: dotted; border-color:#ff0000; border-width:2px; background-color:#fff; ">
                                <center>
                                <br>
                                <p style="font-weight:800; color:#fff; background-color:#ff0000; padding:5px">LANGKAH 5 :<br>SCREENSHOT INFO INI DAN TERUS KE KAUNTER KUTIPAN</p>
                                <h4 style="color:#000"><b>INFO PESERTA</b></h4>
                                </center>
                                <div class="divide20"></div>

                                <p style="color:#000; font-size:18px; line-height:30px;">No Peserta : <strong><?php echo $userdata['nric']; ?></strong><br>Nama : <strong><?php echo $userdata['name']; ?></strong><br>No Telefon : <strong><?php echo $userdata['phone']; ?></strong></p><br>
                            </div>

                            <div class="col-md-2">&nbsp;</div>

                            </div>
                </div>
                <br>

                        </div>
                    </div>
<!--                         <div class="row text-center">
                        
                        <?php
                            echo $this->session->flashdata('email_sent');
                        ?>
                        
                        <div class="col-md-12">

                                <a href="<?php echo base_url()?>amd/send_mail" class="btn btn-primary btn-block">Hantar Emel</a>

                        </div>
                    </div> -->

                </div>
            </section>
        </main><!--main-content-->