<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='min-height:100%; background-image: url("<?php echo base_url()?>assets/images/bg-amd2.jpg")'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            
                            <center>
                            <img src="<?php echo base_url()?>assets/images/amd.png" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">ADVANCED MY DOCUMENTS</h2>

                            <p class="mb60" style="color:#fff100"><strong>Langkah 4 :</strong> Sila lengkapkan borang maklumat peserta.</p>
                            </center>


                            <form action="<?php echo base_url()?>kpi/form_validation_kpi" method="POST">

                                    <div class="col-md-6">
                                        <label for="emel">Nama Team <span>*</span></label>
                                        <input type="name" class="form-control" placeholder="Nama Team" name="name" required="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="s1">Soalan 1? <span>*</span></label>
                                        <select id="select" class="form-control" name="s1" required="">
                                            <option value="" disabled selected>Sila Pilih...</option>
                                            <option value="10">Sangat Baik</option>
                                            <option value="8">Baik</option>
                                            <option value="6">Memuaskan</option>
                                            <option value="4">Kurang Memuaskan</option>
                                            <option value="2">Tidak Memuaskan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="s2">Soalan 2? <span>*</span></label>
                                        <select id="select" class="form-control" name="s2" required="">
                                            <option value="" disabled selected>Sila Pilih...</option>
                                            <option value="10">Sangat Baik</option>
                                            <option value="8">Baik</option>
                                            <option value="6">Memuaskan</option>
                                            <option value="4">Kurang Memuaskan</option>
                                            <option value="2">Tidak Memuaskan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="s3">Soalan 3? <span>*</span></label>
                                        <select id="select" class="form-control" name="s3" required="">
                                            <option value="" disabled selected>Sila Pilih...</option>
                                            <option value="10">Sangat Baik</option>
                                            <option value="8">Baik</option>
                                            <option value="6">Memuaskan</option>
                                            <option value="4">Kurang Memuaskan</option>
                                            <option value="2">Tidak Memuaskan</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <br>    
                                <div class="row">
                                    <div class="col-md-12">
                                    
                                    <div class="col-md-7 pull-left">
                                    <p style="color:#fff">Saya mengesahkan bahawa maklumat saya adalah benar dan mengizinkan pihak Byond Success Sdn Bhd untuk menyimpan data ini untuk urusan seminar di bawah Byond Success Sdn. Bhd.</p>
                                    </div>

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