
<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/rahsia-ceramah-memukau-1024x576.png"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            <center>
                            <img src="<?php echo base_url()?>assets/images/rcm.png" width="50%" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">BILANGAN PESERTA<br>MASTERY CERAMAH MEMUKAU<br><!-- KINI DIBUKA --></h2>

                            <!-- <p style="color:#fff100"><strong>Langkah 2 :</strong> Mohon masukkan No.IC untuk mengesahkan kehadiran.</p> -->
                            </center>
                            <center>
                                <div class="row mb10">
                                    <div class="col-12 bg-primary ml-auto">
                                        <div class = "panel">
                                            <div class = "panel-heading mt20">
                                                <h3 class = "panel-title text-dark">Bilangan Peserta Keseluruhan</h3>
                                            </div>
   
                                            <div class = "panel-body text-white mb20">
                                                <?php echo $this->pickup_model->totalpesertamcm();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb20">
                                    <div class="col-6 bg-warning ">
                                        <div class = "panel">
                                            <div class = "panel-heading mt20">
                                                <h3 class = "panel-title text-dark">Belum Hadir</h3>
                                            </div>
   
                                            <div class = "panel-body text-white mb20">
                                                <?php echo $this->pickup_model->bakalhadirmcm();?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 bg-success ml-auto">
                                        <div class = "panel">
                                            <div class = "panel-heading mt20">
                                                <h3 class = "panel-title text-dark">Hadir</h3>
                                            </div>
   
                                            <div class = "panel-body text-white mb20">
                                                <?php echo $this->pickup_model->hadirseminarmcm();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>     
                            <div class="row">
                                <div class="col-md-12">
                                 	<div class="col-md5 text-center">
                                    	<a href="<?php echo base_url(); ?>pickupmcm/index" class='text-primary ml-2 b-b d-inline-block pb-1'><button type="submit" name="insert" class="btn btn-primary btn-block">Back</button></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main><!--main-content-->