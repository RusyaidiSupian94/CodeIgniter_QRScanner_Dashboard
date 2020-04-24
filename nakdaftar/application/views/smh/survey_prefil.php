<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='min-height:100%; background-image: url("<?php echo base_url()?>assets/images/bg-smh2.jpg")'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            
                            <center>
                            <img src="<?php echo base_url()?>assets/images/logo-smh.png" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">SEMINAR MY HUMAN</h2>

                            <p class="mb60" style="color:#fff100"><strong>Langkah 4 :</strong> Sila lengkapkan borang maklumat peserta.</p>
                            </center>

                            <?php
                            if(isset($user_data))
                            {
                                foreach($user_data->result() as $row)
                                {
                                    ?>
                                


                            <form action="<?php echo base_url()?>smh/peserta_survey_pengesahan_prefil" method="POST">

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="nric">No Kad Pengenalan <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['nric']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama">Nama Peserta <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['name']; ?>" >
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="telefon">No Telefon <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['phone']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emel">Emel <span>*</span></label>
                                        <input type="email" class="form-control" value="<?php echo $userdata['email']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="gender">Jantina <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['gender']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emel">Tempat Tinggal Semasa (Negeri) <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['state']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="country">Negara <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['gender']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company">Nama Syarikat <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['company']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="industry">Industri Perniagaan <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['industry']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status">Status Syarikat <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['status']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="working">Status Pekerjaan <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['working']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="hope">Apakah yang anda harapkan apabila hadir ke program BYOND? <span>*</span></label>
                                        <select id="select" class="form-control" name="hope" required="">
                                            <option value="" disabled selected>Sila Pilih...</option>
                                            <option value="Menyelesaikan Masalah Pengurusan">Menyelesaikan Masalah Pengurusan</option>
                                            <option value="Menaikkan Jualan Syarikat">Menaikkan Jualan Syarikat</option>
                                            <option value="Menambah Jaringan (Networking) Bisnes">Menambah Jaringan (Networking) Bisnes</option>
                                            <option value="Sesi Bersama Tuan Basit">Sesi Bersama Tuan Basit</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="funnel">Dari mana anda mendapat tahu mengenai program ini? <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['funnel']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="interested">Apa yang membuatkan anda tertarik untuk hadir ke program ini? <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['interest']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="experience">Berapa lama anda terlibat dalam perniagaan? <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['experience']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="investment">Berapa jumlah yang telah dilaburkan dalam program/seminar sebelum ini? <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['investment']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="income">Berapa jumlah jualan bulanan bisnes/syarikat? <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['income']; ?>" disabled="" readonly="">
                                    </div>
                                </div>
                            
                                <br>    
                                <div class="row">
                                    <div class="col-md-12">
                                    
                                    <div class="col-md-7 pull-left">
                                    <input type="hidden" name="hidden_id" value="<?php echo $row->nric; ?>" />
                                    <p style="color:#fff">Saya mengesahkan bahawa maklumat saya adalah benar dan mengizinkan pihak Byond Success Sdn Bhd untuk menyimpan data ini untuk urusan seminar di bawah Byond Success Sdn. Bhd.</p>
                                    </div>

                                    <div class="col-md5 pull-right">
                                    <button type="submit" name="insert" class="btn btn-primary btn-block">Seterusnya</button>
                                    </div>
                                    </div>
                                </div>
                            </form>
                            <?php 
                            }
                        }
                        ?>



                        </div>
                    </div>
                </div>
            </section>