<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/bg-smf2.jpg"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto text">
                            <center>
                            <a href="<?php echo base_url()?>mmf/logout"><img src="<?php echo base_url()?>assets/images/mmf.png" class="img-fluid mb30"></a>

                            <div class=" alert-success alert mb60">
                                <p>Kehadiran anda ke <b>SEMINAR MASTERY MY FINANCE telah disahkan</b>.<br>Mohon SCREENSHOT INFO di bawah.</p>
                                <div class="alert alert-info text-center">
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                            </div>
                            </center>

                            <div class="row">
                                <div class="col-lg-12">
                            
                                <div class="col-lg-8 mr-auto ml-auto text" style="border-style: dotted; border-color:#ff0000; border-width:2px; background-color:#fff; ">
                                    <center>
                                    <br>
                                    <p style="font-weight:800; color:#fff; background-color:#ff0000; padding:5px">LANGKAH 5 :<br>SCREENSHOT INFO INI DAN TERUS KE GATE YANG DITETAPKAN</p>
                                    <h4 style="color:#000"><b>INFO PESERTA</b></h4>
                                    </center>
                                    <div class="divide20"></div>

                                   <center>
                                        <img style="width: 70%;" src="<?php echo base_url().'assets3/images/qrcode/mmf/'.$userdata['qrcode'];?>">
                                    </center>

                                    <p style="color:#000; font-size:18px; line-height:30px;">
                                        No Peserta : <strong><!-- <?php echo $userdata['income']; ?> --><?php echo $userdata['no_siri']; ?></strong><br>
                                        No. IC : <strong><?php echo $userdata['nric']; ?></strong><br>Nama : <strong><?php echo $userdata['name']; ?></strong><br>Saiz Baju : <strong><?php echo $userdata['size']; ?></strong></p><br>
                                </div>

                                <div class="col-md-2">&nbsp;</div>

                                </div>
                            </div>
                            <br>

                        </div>
                    </div>

                </div>
            </section>
        </main><!--main-content-->