<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/rahsia-ceramah-memukau-1024x576.png"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            <center>
                            <img src="<?php echo base_url()?>assets/images/rcm.png" width="50%" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">STATISTIK KEHADIRAN<br>
                            </center>


                                <div class="row center">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                <div class="p-2 pt-3 pb-3 si-colored-facebook text-center rounded mb-10" style="background: -webkit-linear-gradient(-90deg, #fedb03, #f2991b);">
                                    <div class="text-center pt-15">

                                        <span class="d-block" style="color:#000; font-weight:900; font-size:28px"><?php echo $this->rcm_model->total_hadir(); ?></span>
                                        <span style="color:#000; font-size:18px; font-weight:600">JUMLAH PESERTA HADIR</span>
                                    </div>
                                </div>
                                <div class="p-2 pt-3 pb-3 si-colored-facebook text-center rounded mb-10" style="margin-top:5px; background: -webkit-linear-gradient(-90deg, #e0e0e0, #a7a7a7);">
                                    <div class="text-center pt-15">

                                        <span class="d-block" style="color:#000; font-weight:900; font-size:28px"><?php echo $this->rcm_model->total_sah(); ?></span>
                                        <span style="color:#000; font-size:18px; font-weight:600">JUMLAH PESERTA SAHKAN KEHADIRAN</span>
                                    </div>
                                </div>
                                <div class="p-2 pt-3 pb-3 si-colored-facebook text-center rounded mb-10" style="margin-top:5px;     background: -webkit-linear-gradient(-90deg, #0084ff, #1072ce);">
                                    <div class="text-center pt-15">

                                        <span class="d-block" style="color:#fff; font-weight:900; font-size:28px"><?php echo $this->rcm_model->total_peserta(); ?></span>
                                        <span style="color:#fff; font-size:18px; font-weight:600">JUMLAH PESERTA KESELURUHAN</span>
                                    </div>
                                </div>
                                </div>
                                </div>


                        </div>
                    </div>
                </div>
            </section>
        </main><!--main-content-->
