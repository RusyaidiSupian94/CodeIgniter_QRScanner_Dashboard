<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/bg-amd2.jpg"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            <center>
                            <img src="<?php echo base_url()?>assets/images/mmd-logo.png" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">PENGESAHAN KEHADIRAN<br>MASTERY MY DOCUMENTS<br>KINI DIBUKA</h2>

                            <p style="color:#fff100"><strong>Langkah 2 :</strong> Mohon masukkan No.IC untuk mengesahkan kehadiran.</p>
                            </center>

                            <div class="text-error">
                                <?php
                                        echo $this->session->flashdata ("error");
                                    ?>
                                </div>

                            <form action="<?php echo base_url()?>mmd/login_validation" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nric">No Kad Pengenalan <span>*</span> (91042409****)</label>
                                        <input type="text" class="form-control" name="nric" placeholder="No Kad Pengenalan tanpa '-'" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md5 pull-right">
                                    <button type="submit" name="insert" class="btn btn-primary btn-block">Seterusnya</button>
                                    </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </main><!--main-content-->