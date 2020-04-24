<section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/rahsia-ceramah-memukau-1024x576.png"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            
                            <center>
                            <img src="<?php echo base_url()?>assets/images/rcm.png" width="50%" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#ffffff; font-weight:500" class="mb30">RAHSIA CERAMAH MEMUKAU</h2>

                            <p class="mb60" style="color:#fff100"><strong>Langkah 4 :</strong> Sila lengkapkan borang maklumat peserta.</p>
                            </center>

                            <?php
                            if(isset($user_data))
                            {
                                foreach($user_data->result() as $row)
                                {
                                    ?>
                                


                            <form action="<?php echo base_url()?>rcm/peserta_survey_pengesahan" method="POST">

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="nric">No Peserta <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['nric']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama">Nama Peserta <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['name']; ?>" disabled="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="telefon">No Telefon <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $userdata['phone']; ?>" disabled="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emel">Emel <span>*</span></label>
                                        <input type="email" class="form-control" value="<?php echo $userdata['email']; ?>" required="" readonly="">
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="gender">Jantina <span>*</span></label>
                                        <select id="select" class="form-control" name="gender" required="">
                                            <option value="" disabled selected>SILA PILIH...</option>
                                            <option value="LELAKI">LELAKI</option>
                                            <option value="WANITA">WANITA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emel">Tempat Tinggal Semasa (Negeri) <span>*</span></label>
                                        <select id="select" class="form-control" name="state" required="">
                                            <option value="" disabled selected>SILA PILIH...</option>
                                            <option value="JOHOR">JOHOR</option>
                                            <option value="KEDAH">KEDAH</option>
                                            <option value="KELANTAN">KELANTAN</option>
                                            <option value="MELAKA">MELAKA</option>
                                            <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                            <option value="PAHANG">PAHANG</option>
                                            <option value="PERAK">PERAK</option>
                                            <option value="PERLIS">PERLIS</option>
                                            <option value="PULAU PINANG">PULAU PINANG</option>
                                            <option value="SABAH">SABAH</option>
                                            <option value="SARAWAK">SARAWAK</option>
                                            <option value="SELANGOR">SELANGOR</option>
                                            <option value="TERENGGANU">TERENGGANU</option>
                                            <option value="WP KUALA LUMPUR">WP KUALA LUMPUR</option>
                                            <option value="WP LABUAN">WP LABUAN</option>
                                            <option value="LAIN-LAIN">LAIN-LAIN</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="company">Nama Syarikat <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Nama Syarikat" name="company" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="working">Status Pekerjaan <span>*</span></label>
                                        <select id="select" class="form-control" name="working" required="">
                                            <option value="" disabled selected>SILA PILIH...</option>
                                            <option value="MAJIKAN">MAJIKAN</option>
                                            <option value="PENGURUS/KETUA JABATAN">PENGURUS/KETUA JABATAN</option>
                                            <option value="PEKERJA">PEKERJA</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row control-group">
                                    <div class="col-md-6">
                                        <label for="industry">Industri Perniagaan <span>*</span></label>
                                        <select id="select" class="form-control" name="industry" required="">
                                            <option value="" disabled selected>PILIH INDUSTRI PERNIAGAAN...</option>
                                            <option value="FESYEN">FESYEN</option>
                                            <option value="KOSMETIK/KECANTIKAN">KOSMETIK/KECANTIKAN</option>
                                            <option value="MAKANAN">MAKANAN</option>
                                            <option value="NGO">NGO</option>
                                            <option value="PEMBINAAN/KONTRAKTOR">PEMBINAAN/KONTRAKTOR</option>
                                            <option value="PEMASARAN">PEMASARAN</option>
                                            <option value="PENGIKLANAN">PENGIKLANAN</option>
                                            <option value="PERTANIAN/PENTERNAKAN">PERTANIAN/PENTERNAKAN</option>
                                            <option value="PENDIDIKAN/SEMINAR">PENDIDIKAN/SEMINAR</option>
                                            <option value="PERUNCITAN/PEMBORONG">PERUNCITAN/PEMBORONG</option>
                                            <option value="SERVIS">SERVIS</option>
                                            <option value="LAIN-LAIN">LAIN-LAIN</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status">Status Syarikat <span>*</span></label>
                                        <select id="select" class="form-control" name="status" required="">
                                            <option value="" disabled selected>PILIH STATUS SYARIKAT...</option>
                                            <option value="SDN BHD">SDN BHD</option>
                                            <option value="PLT">PLT</option>
                                            <option value="ENTERPRISE">ENTERPRISE</option>
                                            <option value="NGO">NGO</option>
                                            <option value="BELUM DAFTAR">BELUM DAFTAR</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="funnel">Dari mana anda mendapat tahu mengenai program ini? <span>*</span></label>
                                        <select id="select" class="form-control" name="funnel" required="">
                                            <option value="" disabled selected>SILA PILIH...</option>
                                            <option value="FACEBOOK">FACEBOOK</option>
                                            <option value="LAMAN WEB">LAMAN WEB</option>
                                            <option value="INSTAGRAM">INSTAGRAM</option>
                                            <option value="RAKAN">RAKAN</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="interested">Apa yang membuatkan anda tertarik untuk hadir ke program ini? <span>*</span></label>
                                        <select id="select" class="form-control" name="interest" required="">
                                            <option value="" disabled selected>SILA PILIH...</option>
                                            <option value="TOPIK MENARIK">TOPIK MENARIK</option>
                                            <option value="NAK BELAJAR">NAK BELAJAR</option>
                                            <option value="SPEAKER BAGUS">SPEAKER BAGUS</option>
                                            <option value="LOKASI MUDAH AKSES">LOKASI MUDAH AKSES</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row control-group">
                                    <div class="col-md-12">
                                        <label for="income">Berapa jumlah jualan bulanan bisnes/syarikat? <span>*</span></label>
                                        <select id="select" class="form-control" name="income" required="">
                                            <option value="" disabled selected>SILA PILIH...</option>
                                            <option value="1">RM0 - RM10K</option>
                                            <option value="2">RM10K - RM30K</option>
                                            <option value="3">RM30K - RM50K</option>
                                            <option value="4">RM50K - RM100K</option>
                                            <option value="5">RM100K - RM500K</option>
                                            <option value="6">RM500K Ke Atas</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <br>    
                                <div class="row">
                                    <div class="col-md-12">
                                    
                                    <div class="col-md-7 pull-left">
                                    <input type="hidden" name="hidden_id" value="<?php echo $row->nric; ?>" />
                                    <p style="color:#fff">Saya mengesahkan bahawa maklumat saya adalah benar dan mengizinkan pihak penganjur untuk menyimpan data ini untuk urusan seminar di bawah Byond Success Sdn. Bhd.</p>
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