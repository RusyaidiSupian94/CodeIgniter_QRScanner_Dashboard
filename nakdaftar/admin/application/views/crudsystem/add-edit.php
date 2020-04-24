<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="portlet-box">
                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                        <div class="flex d-flex flex-column text-center">
                            <h3>UPDATE FORM <?php echo $updatedata['no_siri']; ?></h3>
                        </div>
                    </div>
                    <div class="portlet-body flex-row b-b flex d-flex align-items-center">
                        <div class="flex d-flex flex-column">
                                <!-- <h2><?php echo $title; ?></h2> -->
    
                            <!-- Display status message -->
                            <?php if(!empty($success_msg)){ ?>
                            <div class="col-xs-12">
                                <div class="alert alert-success"><?php echo $success_msg; ?></div>
                            </div>
                            <?php }else if(!empty($error_msg)){ ?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                            </div>
                            <?php } ?>
    
                            <div class="row">

                                <div class="col-md-12">
                                    <form action="" method="post" ><!--------action="<?php echo base_url('CSVcodex/edit'); ?>"--->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>NAME</label>
                                                <input type="text" class="form-control" name="name" placeholder="ENTER YOUR NAME" value="<?php echo !empty($updatedata['name'])?$updatedata['name']:''; ?>" >
                                                <?php echo form_error('name','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" name="phone" placeholder="ENTER YOUR PHONE NUMBER" value="<?php echo !empty($updatedata['phone'])?$updatedata['phone']:''; ?>" >
                                                <?php echo form_error('phone','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>EMAIL</label>
                                                <input type="text" class="form-control" name="email" placeholder="ENTER YOUR EMAIL" value="<?php echo !empty($updatedata['email'])?$updatedata['email']:''; ?>" >
                                                <?php echo form_error('email','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label>NRIC</label>
                                                <input type="text" class="form-control" name="nric" placeholder="ENTER YOUR NRIC" value="<?php echo !empty($updatedata['nric'])?$updatedata['nric']:''; ?>" >
                                                <?php echo form_error('nric','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">GENDER</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                                        <option value="<?php echo !empty($updatedata['gender'])?$updatedata['gender']:''; ?>">Select your gender ( <?php echo $updatedata['gender']; ?> )</option>
                                                        <option value="L">LELAKI</option>
                                                        <option value="P">PEREMPUAN</option>
                                                    </select>
                                                    <?php echo form_error('gender','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">SIZE T-SHIRT</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="size">
                                                        <option value="<?php echo !empty($updatedata['size'])?$updatedata['size']:''; ?>">Select your size ( <?php echo $updatedata['size']; ?> )</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                        <option value="XXXL">XXXL</option>
                                                    </select>
                                                    <?php echo form_error('size','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">TIKET</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="tiket">
                                                        <option value="<?php echo !empty($updatedata['tiket'])?$updatedata['tiket']:''; ?>">Select your tiket ( <?php echo $updatedata['tiket']; ?> )</option>
                                                        <option value="FREE">FREE</option>
                                                        <option value="GENEREL">GENEREL</option>
                                                        <option value="VIP">VIP</option>
                                                        <option value="VVIP">VVIP</option>
                                                    </select>
                                                    <?php echo form_error('tiket','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">KAUNTER</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="kaunter">
                                                        <option value="<?php echo !empty($updatedata['kaunter'])?$updatedata['kaunter']:''; ?>">Select Your Kaunter ( <?php echo $updatedata['kaunter']; ?> )</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                    <?php echo form_error('kaunter','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">STATE</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="state">
                                                        <option value="<?php echo !empty($updatedata['state'])?$updatedata['state']:''; ?>">Select Your State ( <?php echo $updatedata['state']; ?> )</option>
                                                        <option value="JOHOR">Johor</option>
                                                        <option value="KEDAH">Kedah</option>
                                                        <option value="KELANTAN">Kelantan</option>
                                                        <option value="MELAKA">Melaka</option>
                                                        <option value="NEGERI SEMBILAN">Negeri Sembilan</option>
                                                        <option value="PAHANG">Pahang</option>
                                                        <option value="PERAK">Perak</option>
                                                        <option value="PERLIS">Perlis</option>
                                                        <option value="PULAU PINANG">Pulau Pinang</option>
                                                        <option value="SABAH">Sabah</option>
                                                        <option value="SARAWAK">Sarawak</option>
                                                        <option value="SELANGOR">Selangor</option>
                                                        <option value="TERENGGANU">Terengganu</option>
                                                        <option value="WP LABUAN">WP Labuan</option>
                                                        <option value="WP KUALA LUMPUR">WP Kuala Lumpur</option>
                                                        <option value="LAIN-LAIN">Lain-lain</option>
                                                    </select>
                                                    <?php echo form_error('state','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                               <!--  <label>COUNTRY</label> -->
                                                <!-- <input type="text" class="form-control" name="country" placeholder="ENTER YOUR COUNTRY" value="<?php echo !empty($updatedata['country'])?$updatedata['country']:''; ?>" >
                                                <?php echo form_error('country','<div class="invalid-feedback">','</div>'); ?> -->

                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">COUNTRY</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="country">
                                                        <option value="<?php echo !empty($updatedata['country'])?$updatedata['country']:''; ?>">Select Your State ( <?php echo $updatedata['country']; ?> )</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Singapura">Singapura</option>
                                                        <option value="LAIN-LAIN">Lain-lain</option>
                                                    </select>
                                                    <?php echo form_error('country','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label>COMPANY NAME</label>
                                                <input type="text" class="form-control" name="company" placeholder="ENTER YOUR COMPANY NAME" value="<?php echo !empty($updatedata['company'])?$updatedata['company']:''; ?>" >
                                                <?php echo form_error('company','<div class="invalid-feedback">','</div>'); ?>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">STATUS COMPANY</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                        <option value="<?php echo !empty($updatedata['status'])?$updatedata['status']:''; ?>">Select Your Status ( <?php echo $updatedata['status']; ?> )</option>
                                                        <option value="SDN BHD">SDN BHD</option>
                                                        <option value="PLT">PLT</option>
                                                        <option value="ENTERPRISE">ENTERPRISE</option>
                                                        <option value="NGO">NGO</option>
                                                        <option value="BELUM DAFTAR">BELUM DAFTAR</option>
                                                    </select>
                                                    <?php echo form_error('status','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">INDUSTRY</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="industry">
                                                        <option value="<?php echo !empty($updatedata['industry'])?$updatedata['industry']:''; ?>">Select Your INDUSTRY ( <?php echo $updatedata['industry']; ?> )</option>
                                                        <option value="FEKSYEN">FEKSYEN</option>
                                                        <option value="KOSMETIK">KOSMETIK</option>
                                                        <option value="MAKANAN">MAKANAN</option>
                                                        <option value="NGO">NGO</option>
                                                        <option value="PEBINAAN">PEMBINAAN</option>
                                                        <option value="PEMASARAN">PEMASARAN</option>
                                                        <option value="PENGIKLANAN">PENGIKLANAN</option>
                                                        <option value="PERTANIAN">PERTANIAN</option>
                                                        <option value="PENDIDIKAN/SEMINAR">PENDIDIKAN/SEMINAR</option>
                                                        <option value="PERUNCITAN/PEMBORONGAN">PERUNCITAN/PEMBORONGAN</option>
                                                        <option value="SERVIS">SERVIS</option>
                                                        <option value="LAIN-LAIN">Lain-lain</option>
                                                    </select>
                                                    <?php echo form_error('industry','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">JAWATAN</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="working">
                                                        <option value="<?php echo !empty($updatedata['working'])?$updatedata['working']:''; ?>">Select JAWATAN ( <?php echo $updatedata['working']; ?> )</option>
                                                        <option value="MAJIKAN">MAJIKAN</option>
                                                        <option value="PENGURUS/KETUA JABATAN">PENGURUS/KETUA JABATAN</option>
                                                        <option value="PEKERJA">PEKERJA</option>
                                                    </select>
                                                    <?php echo form_error('working','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">HARAPAN</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="hope">
                                                        <option value="<?php echo !empty($updatedata['hope'])?$updatedata['hope']:''; ?>">HARAPAN ( <?php echo $updatedata['hope']; ?> )</option>
                                                        <option value="MENYELESAIKAN MASALAH PENGURUSAN">MENYELESAIKAN MASALAH PENGURUSAN</option>
                                                        <option value="MENAIKKAN JUALAN SYARIKAT">MENAIKKAN JUALAN SYARIKAT</option>
                                                        <option value="MENAMBAH JARINGAN (NETWORKING) BISNES">MENAMBAH JARINGAN (NETWORKING) BISNES</option>
                                                        <option value="SESI BERSAMA TUAN ABDUL BASIT">SESI BERSAMA TUAN ABDUL BASIT</option>
                                                    </select>
                                                    <?php echo form_error('hope','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">SEBAB HADIR</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="interest">
                                                        <option value="<?php echo !empty($updatedata['interest'])?$updatedata['interest']:''; ?>">HARAPANN ( <?php echo $updatedata['interest']; ?> )</option>
                                                        <option value="LOKASI MUDAH AKSES">LOKASI MUDAH AKSES</option>
                                                        <option value="NAK BELAJAR">NAK BELAJAR</option>
                                                        <option value="SPEAKER BAGUS">SPEAKER BAGUS</option>
                                                        <option value="TOPIK MENARIK">TOPIK MENARIK</option>
                                                    </select>
                                                    <?php echo form_error('interest','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">FUNNEL</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="funnel">
                                                        <option value="<?php echo !empty($updatedata['funnel'])?$updatedata['funnel']:''; ?>">( <?php echo $updatedata['funnel']; ?> )</option>
                                                        <option value="BANNER">BANNER</option>
                                                        <option value="FACEBOOK">FACEBOOK</option>
                                                        <option value="INSTAGRAM">INSTAGRAM</option>
                                                        <option value="LAMAN WEB">LAMAN WEB</option>
                                                        <option value="RADIO">RADIO</option>
                                                        <option value="RAKAN">RAKAN</option>
                                                        <option value="SURAT KHABAR">SURAT KHABAR</option>
                                                    </select>
                                                    <?php echo form_error('funnel','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">PENGALAMAN DALAM BISNESS</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="experience">
                                                        <option value="<?php echo !empty($updatedata['experience'])?$updatedata['experience']:''; ?>">( <?php echo $updatedata['experience']; ?> )</option>
                                                        <option value="0 - 6BULAN">0 - 6BULAN</option>
                                                        <option value="6BULAN - 1TAHUN">6BULAN - 1TAHUN</option>
                                                        <option value="1TAHUN -3TAHUN">1TAHUN -3TAHUN</option>
                                                        <option value="3TAHUN - 5TAHUN">3TAHUN - 5TAHUN</option>
                                                        <option value="5TAHUN - 10TAHUN">5TAHUN - 10TAHUN</option>
                                                        <option value="10 TAHUN KEATAS">10 TAHUN KEATAS</option>
                                                    </select>
                                                    <?php echo form_error('experience','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">INVESTMENT</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="investment">
                                                        <option value="<?php echo !empty($updatedata['investment'])?$updatedata['investment']:''; ?>">( <?php echo $updatedata['investment']; ?> )</option>
                                                        <option value="BAWAH RM300">BAWAH RM300</option>
                                                        <option value="RM300 - RM1000">RM300 - RM1,000</option>
                                                        <option value="RM1000 - RM3000">RM1,000 - RM3,000</option>
                                                        <option value="RM3000 - RM10000">RM3,000 - RM10,000</option>
                                                        <option value="RM10000 - RM30000">RM10,000 - RM30,000</option>
                                                        <option value="RM30000 KE ATAS">RM30,000 KE ATAS</option>
                                                    </select>
                                                    <?php echo form_error('investment','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">INCOME</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="income">
                                                        <option value="<?php echo !empty($updatedata['income'])?$updatedata['income']:''; ?>">( <?php echo $updatedata['income']; ?> )</option>
                                                        <option value="1">1 = ( 0 - RM10,000 )</option>
                                                        <option value="2">2 = ( RM10,000 - RM30,000 )</option>
                                                        <option value="3">3 = ( RM30,000 - RM50,000 )</option>
                                                        <option value="4">4 = ( RM50,000 - RM100,000 )</option>
                                                        <option value="5">5 = ( RM100,000 - RM500,000 )</option>
                                                        <option value="6">6 = ( RM500,000 KE ATAS )</option>
                                                    </select>
                                                    <?php echo form_error('income','<div class="invalid-feedback">','</div>'); ?>
                                                </div>
                                        </div>
                                    
                                        <a href="<?php echo site_url('CSVcodex/csv'); ?>" class="btn btn-secondary">Back</a>
                                        <input type="submit" name="memSubmit" class="btn btn-success" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



