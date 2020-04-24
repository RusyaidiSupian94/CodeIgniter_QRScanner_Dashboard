<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/bg-smh2.jpg"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto">
                            <center>
                            <img src="<?php echo base_url()?>assets/images/logo-smh.png" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#fff; font-weight:500" class="mb10">SEMINAR MY HUMAN</h2>

                            <p style="color:#fff100" class="mb30"><strong>Langkah 3 :</strong> Sila sahkan maklumat peribadi anda.</p>
                            </center>
                            
                            <p class="mb30" style="color:#fff">N0. IC : <strong><?php echo $userdata['nric']; ?></strong><br>Nama : <strong><?php echo $userdata['name']; ?></strong><br>No Telefon : <strong><?php echo $userdata['phone']; ?></strong><br>Emel : <strong><?php echo $userdata['email']; ?></strong></p>

                        </div>
                    </div>
                    
                    <div class="row text-center">
                        
                        <div class="col-md-10">
                            <div class="col-md-3 pull-right">
                                <a href="<?php echo base_url()?>smh/peserta_survey/<?php echo $userdata['nric']; ?>" class="btn btn-primary btn-block">Seterusnya</a>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </main><!--main-content-->