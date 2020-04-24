        <section id="subscribe" class="bg-parallax pt100 pb100" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php echo base_url()?>assets/images/bg-smh-3.jpg"); min-height:100%; position:inherit;'>
                <div class="parallax-overlay"></div>
                <div class="container">
                <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto">
                            <center>
                            <img src="<?php echo base_url()?>assets/images/mmf.png" class="img-fluid mb30">
                            <h2 style="margin-bottom:0px; color:#fff; font-weight:500" class="mb10">MASTERY MY FINANCE</h2>

                            <p style="color:#fff100" class="mb30"><strong>Langkah 2 :</strong> Sila sahkan maklumat peribadi anda.</p>
                            </center>
                            
                            <p class="mb30" style="color:#fff">N0. IC : <strong><?php echo $userdata['nric']; ?></strong><br>Nama : <strong><?php echo $userdata['name']; ?></strong><br>No Telefon : <strong><?php echo $userdata['phone']; ?></strong><br>Emel : <strong><?php echo $userdata['email']; ?></strong></p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 mr-auto ml-auto">
                            

                            <?php
                            if(isset($user_data))
                            {
                                foreach($user_data->result() as $row)
                                {
                                    ?>
                                


                            <form action="<?php echo base_url()?>mastery/pengesahan_peserta_checked" method="POST">

                                
                            <br>    
                                <div class="row">
                                    <div class="col-lg-10 mr-auto ml-auto">
                                    
                                    <div class="col-md-9 pull-left">
                                    <input type="hidden" name="hidden_id" value="<?php echo $row->nric; ?>" />
                                    <input type="checkbox" id="pengesahan" name="pengesahan" value="yes" required=""><span style="color:#fff"> Saya bersetuju untuk didaftarkan di dalam program Mastery My Finance yang berlangsung pada 9 - 12 April 2019.</span></input>
                                    </div>

                                    <div class="col-md3 pull-right">
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