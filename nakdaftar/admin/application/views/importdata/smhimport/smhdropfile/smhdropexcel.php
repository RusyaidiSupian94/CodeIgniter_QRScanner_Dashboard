<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 mb-30">
                                <div class="portlet-box">
                                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                                        <div class="flex d-flex flex-column text-center">
                                            <h3>Upload files or drop into box</h3>

                                        <!-- Import link -->
                                            <div class="col-md-12 head">
                                                <div class="float-right">
                                                    <a href="javascript:void(0);" class="btn btn-primary" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>

                                                    <a href="javascript:void(0);" class="btn btn-danger" onclick="formToggle('exportFrm');"><i class="plus"></i> Export</a>
                                                    <a href="<?php echo site_url('updatedasmh/add'); ?>" class="btn btn-success">ADD</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">


                                        <!-- Display status message -->
                                            <?php if(!empty($success_msg)){ ?>
                                            <div class="col-xs-12">
                                                <div class="alert alert-success"><?php echo $success_msg; ?></div>
                                            </div>
                                            <?php }if(!empty($error_msg)){ ?>
                                            <div class="col-xs-12">
                                                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                                            </div>
                                            <?php } ?>



                                        <!-- File upload form -->
                                        <div class="col-md-12" id="importFrm" style="display: none;">
                                            <form action="<?php echo base_url('smhimport/import'); ?>" method="post" enctype="multipart/form-data">
                                                <input type="file" name="file" />
                                                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
                                            </form>
                                        </div>

                                        <div class="col-md-12" id="exportFrm" style="display: none;">
                                            <a href="<?php echo site_url('Exportsmh/generateXlsx'); ?>" class="btn btn-primary">.xlsx</a>
                                            <a href="<?php echo site_url('Exportsmh/generateXls'); ?>" class="btn btn-primary">.xls</a>
                                            <a href="<?php echo site_url('Exportsmh/generateCsv'); ?>" class="btn btn-primary">.csv</a>
                                        </div>


                                        <div class="dropdown-divider mb-20"></div><!---class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30"----><!------>

                                        <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3" >
                                            <!-- Data list table -->
                                            <!-- <table class="table table-striped table-bordered" > --><!--style="overflow-x:auto;"--->
                                                <!--id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%"--->
                                                <table id="example" class="display nowrap text-center" cellspacing="0" style="width: 100%;">
                                                <thead class="thead-dark" >
                                                    <tr>
                                                        <!-- <th >#ID</th> -->
                                                        <th >No Siri</th>
                                                        <th >Name</th>
                                                        <th >Gender</th>
                                                        <th >NRIC</th>
                                                        <th >Phone</th>
                                                        <th >email</th>
                                                        <th >Company</th>
                                                        <th >Status</th>
                                                        <th >Working</th>
                                                        <th >State</th>
                                                        <th >Funnel</th>
                                                        <th >Investment</th>
                                                        <th >Income</th>
                                                        <!--<th >Kehadiran</th>-->
                                                        <!--<th >QRCODE</th>-->
                                                        <th >Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(!empty($smh)){ foreach($smh as $row){ ?><!--testing tu table database to call each role--->
                                                    <tr>
                                                        <!-- <td><?php echo $row['cust_id']; ?></td> -->
                                                        <td><?php echo $row['no_siri']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['gender']; ?></td>
                                                        <td><?php echo $row['nric']; ?></td>
                                                        <td><?php echo $row['phone']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['company']; ?></td>
                                                        <td><?php echo $row['status']; ?></td>
                                                        <td><?php echo $row['working']; ?></td>
                                                        <td><?php echo $row['state']; ?></td>
                                                        <td><?php echo $row['funnel']; ?></td>
                                                        <td><?php echo $row['investment']; ?></td>
                                                        <td><?php echo $row['income']; ?></td>
                                                        <!--<td><?php echo $row['kehadiran']; ?></td>-->
                                                        <!--<td><img style="width: 100px;" src="<?php echo base_url().'assets/images/qrcode/smh/'.$row['qrcode'];?>"></td>-->
                                                        <th >
                                                            <a href="<?php echo site_url('updatedasmh/view/'.$row['id']);?>" class="btn btn-success"><div>View</div></a>
                                                            <a href="<?php echo site_url('updatedasmh/edit/'.$row['id']); ?>" class="btn btn-warning"><div>Edit</div></a>
                                                            <a href="<?php echo site_url('updatedasmh/delete/'.$row['id']); ?>" class="btn btn-danger"><div>DELETE</div></a>
                                                            <!-- <a href="<?php echo base_url('Home/updateform');?>" class="btn btn-danger"><div>Delete</div></a> -->
                                                        </th>
                                                    </tr>
                                                    <?php } }else{ ?>
                                                    <tr><td colspan="5">No member(s) found...</td></tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>