                                <div role="tabpanel" class="tab-pane" id="tb2" name="status pekerjaan">

                                    <div id="graph201" class="d-flex justify-content-center"></div>

                                    <div class="row">
                                        <div class="col-lg-4 mb-30">
                                            <div class="list-alt bg-primary rounded">
                                                <div class="list-item">
                                                    <div class="list-thumb">
                                                        <i class="fas fa-user fs-2x"></i>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="list-title">
                                                            <?php echo $this->modelamd->amdstatusmajikan();?> 
                                                        </span>
                                                        <span class="list-content">
                                                            Majikan
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-lg-4 mb-30">
                                            <div class="list-alt bg-primary rounded">
                                                <div class="list-item">
                                                    <div class="list-thumb">
                                                        <i class="fas fa-user fs-2x"></i>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="list-title">
                                                            <?php echo $this->modelamd->amdstatuspengurus();?> 
                                                        </span>
                                                        <span class="list-content">
                                                            Pengurus/Ketua Jabatan
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-lg-4 mb-30">
                                            <div class="list-alt bg-primary rounded">
                                                <div class="list-item">
                                                    <div class="list-thumb">
                                                        <i class="fas fa-user fs-2x"></i>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="list-title">
                                                            <?php echo $this->modelamd->amdstatuspekerja();?> 
                                                        </span>
                                                        <span class="list-content">
                                                            Pekerja
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                    </div>
                                </div>
