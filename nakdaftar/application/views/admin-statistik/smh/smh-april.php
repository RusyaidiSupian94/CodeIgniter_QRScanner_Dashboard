<div class="page-content d-flex flex">
                    <div class="container-fluid">
                        
                <div class="page-subheader mb-30">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="list">
                                    <div class="list-item pl-0">
                                        <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="list-body">
                                            <div class="list-title fs-2x">
                                                <h3>Statistik SMH April 2019</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>login/dashboard/"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Statistik</li>
                                        <li class="breadcrumb-item active">Seminar My Human</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                        <div class="row">
                            <div class="col-lg-2 mb-30">
                            </div><!--col-->
                            <div class="col-lg-4 mb-30">
                                <div class="bg-gradient-primary bg-primary pt-4 pb-4 rounded shadow-sm">
                                    <img src="<?php echo base_url()?>assets/images/logo-smh.png" alt="" class="img-fluid" style="padding-top:17px;padding-left:30px;padding-right:30px; padding-bottom:17px">
                                    <div class="text-center pt-15">
                                        <h5 class=" mb-0">SEMINAR MY HUMAN</h5>
                                        <span class="text-muted  d-block pb-2">27 APRIL 2019</span>
                                        <div class="clearifx pb-3">
                                            <span class="p-2 text-center d-inline-block ">
                                                <span class="pt-1  fs-1x"><?php echo $this->statistik_smh_model->hadir(); ?></span><br>
                                                <span class="pt-1  fs12 text-muted">Male</span>
                                            </span>
                                            <span class="p-2 text-center d-inline-block ">
                                                <span class="pt-1  fs-1x"><?php echo $this->statistik_smh_model->total_perempuan(); ?></span><br>
                                                <span class="pt-1  fs12 text-muted">Female</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-30">
                                <div class="p-2 pt-3 pb-3 si-colored-facebook text-center rounded mb-10">
                                    <div class="text-center pt-15">

                                        <span class=" fs-3x lineH-1 font300 d-block"><?php echo $this->statistik_smh_model->total_peserta(); ?></span>
                                        <span class=" text-muted fs-1x d-block">Peserta Berdaftar</span>
                                        <i class=" d-block pt-2 fs-2x fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="p-2 pt-3 pb-3 si-colored-twitter text-center rounded">
                                    <div class="text-center pt-15">

                                        <span class=" fs-3x lineH-1 font300 d-block"><?php echo $this->statistik_smh_model->total_hadir(); ?></span>
                                        <span class=" text-muted fs-1x d-block">Peserta Hadir</span>
                                        <i class=" d-block pt-2 fs-2x fa fa-users"></i>
                                    </div>
                                </div>
                            </div><!--col-->
                        </div>


                        <div class="row">
                             <div class="col-lg-12 mb-30">
                                 <div class="rounded shadow-sm bg-white p-3">
                                       <h5 class="font500 fs-1x mb-30">Select To View Statistics</h5>
                                 <div class="row">
                                     <div class="col-sm-2">
                                          <!-- Nav tabs -->
                                            <ul class="nav nav-pills flex-column nav" role="tablist">
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link  active show" href="#tb5" aria-controls="tb5" role="tab" data-toggle="tab" aria-selected="true"><i class="fa fa-home mr-2"></i>Status Syarikat</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb6" aria-controls="tb6" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-user-circle mr-2"></i>Status Pekerjaan</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb7" aria-controls="tb7" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-comments mr-2"></i>Industri</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb8" aria-controls="tb8" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-cog mr-2"></i>Negeri</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb9" aria-controls="tb9" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-cog mr-2"></i>Funnel Peserta</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb10" aria-controls="tb10" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-cog mr-2"></i>Pengalaman Bisnes</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb11" aria-controls="tb11" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-cog mr-2"></i>Jumlah Pelaburan</a></li>
                                                <li role="presentation" class="nav-item d-block"><a class="nav-link" href="#tb12" aria-controls="tb12" role="tab" data-toggle="tab" aria-selected="false"><i class="fa fa-cog mr-2"></i>Pendapatan</a></li>
                                            </ul>
                                     </div>

                                            <!-- Tab panes -->
                                            <div class="tab-content col-sm-10">
                                                <div role="tabpanel" class="tab-pane active" id="tb5">
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_sdn(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            SDN BHD
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_ent(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            ENTERPRISE
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_status_ngo(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            NGO
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_belum_daftar(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            BELUM DAFTAR
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="tb6">
                                                 <div class="row">
                                                    <div class="col-lg-4 mb-30">
                                                        <div class="list-alt bg-primary rounded">
                                                            <div class="list-item">
                                                                <div class="list-thumb">
                                                                    <i class="icon-Mail-Unread fs-2x"></i>
                                                                </div>
                                                                <div class="list-body">
                                                                    <span class="list-title">
                                                                        <?php echo $this->statistik_smh_model->total_majikan(); ?>
                                                                    </span>
                                                                    <span class="list-content">
                                                                        MAJIKAN
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--col-->
                                                    <div class="col-lg-4 mb-30">
                                                        <div class="list-alt bg-primary rounded">
                                                            <div class="list-item">
                                                                <div class="list-thumb">
                                                                    <i class="icon-MaleFemale fs-2x"></i>
                                                                </div>
                                                                <div class="list-body">
                                                                    <span class="list-title">
                                                                        <?php echo $this->statistik_smh_model->total_pengurus(); ?>
                                                                    </span>
                                                                    <span class="list-content">
                                                                        PENGURUS/KETUA JABATAN
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--col-->
                                                    <div class="col-lg-4 mb-30">
                                                        <div class="list-alt bg-primary rounded">
                                                            <div class="list-item">
                                                                <div class="list-thumb">
                                                                    <i class="icon-Ticket fs-2x"></i>
                                                                </div>
                                                                <div class="list-body">
                                                                    <span class="list-title">
                                                                       <?php echo $this->statistik_smh_model->total_pekerja(); ?>
                                                                    </span>
                                                                    <span class="list-content">
                                                                        PEKERJA
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--col-->
                                                </div>

                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="tb7">
                                                 <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_fesyen(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            FESYEN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_kosmetik(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            KOSMETIK
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_makanan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            MAKANAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_ngo(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            NGO
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pembinaan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PEMBINAAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pemasaran(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PEMASARAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pengiklanan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PENGIKLANAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pertanian(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PERTANIAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendidikan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PENDIDIKAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_runcit(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PERUNCITAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_servis(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            SERVIS
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_industri_lain(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            LAIN-LAIN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>

                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="tb8">
                                                 
                                                 <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_johor(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            JOHOR
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_kedah(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            KEDAH
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_kelantan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            KELANTAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_melaka(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            MELAKA
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_negeri9(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            NEGERI SEMBILAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pahang(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PAHANG
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_perak(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PERAK
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_perlis(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PERLIS
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_penang(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            PULAU PINANG
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_sabah(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            SABAH
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_sarawak(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            SARAWAK
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_selangor(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            SELANGOR
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_terengganu(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            TERENGGANU
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_kl(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            WP KUALA LUMPUR
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_labuan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            WP LABUAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_lain(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            LAIN-LAIN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tb9">
                                                 
                                                 <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_facebook(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            FACEBOOK
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_web(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            LAMAN WEB
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_ig(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            INSTAGRAM
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_radio(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RADIO
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_banner(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            BANNER
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_news(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            news
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-3 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_rakan(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RAKAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tb10">
                                                 
                                                 <div class="row">
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_berapa1(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            0 - 6 BULAN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_berapa2(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            6 BULAN - 1 TAHUN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_berapa3(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            1 TAHUN - 3 TAHUN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_berapa4(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            3 TAHUN - 5 TAHUN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_berapa5(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            5 TAHUN - 10 TAHUN
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_berapa6(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            10 TAHUN KE ATAS
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    </div>

                                                <div role="tabpanel" class="tab-pane" id="tb11">
                                                 
                                                 <div class="row">
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_jumlah1(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            BAWAH RM300
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_jumlah2(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM300 - RM1,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_jumlah3(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM1,000 - RM3,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_jumlah4(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM3,000 - RM10,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_jumlah5(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM10,000 - RM30,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-danger rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_jumlah6(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM30,000 KE ATAS
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    </div>

                                                    <div role="tabpanel" class="tab-pane" id="tb12">
                                                 
                                                 <div class="row">
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendapatan1(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM0 - RM10,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendapatan2(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM10,000 - RM30,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Ticket fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendapatan3(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM30,000 - RM50,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-Mail-Unread fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendapatan4(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM50,000 - RM100,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendapatan5(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM100,000 - RM500,000
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-lg-4 mb-30">
                                                            <div class="list-alt bg-primary rounded">
                                                                <div class="list-item">
                                                                    <div class="list-thumb">
                                                                        <i class="icon-MaleFemale fs-2x"></i>
                                                                    </div>
                                                                    <div class="list-body">
                                                                        <span class="list-title">
                                                                            <?php echo $this->statistik_smh_model->total_pendapatan6(); ?>
                                                                        </span>
                                                                        <span class="list-content">
                                                                            RM500,000 KE ATAS
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div>
                                                    </div>

                                            </div>
                                        </div>
                                 </div>
                            </div>
                        </div>



                        </div>
                    </div>
                </div>