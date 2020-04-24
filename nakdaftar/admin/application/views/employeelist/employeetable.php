<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 mb-30">
                                <div class="portlet-box">
                                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                                        <div class="flex d-flex flex-column text-center">
                                            <h3>Employee Table</h3>

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
                                        <!-- Import link -->
                                            <!-- <div class="col-md-12 head">
                                                <div class="float-right">
                                                    <a href="javascript:void(0);" class="btn btn-primary" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>

                                                    <a href="javascript:void(0);" class="btn btn-danger" onclick="formToggle('exportFrm');"><i class="plus"></i> Export</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="portlet-body">

                                        <!-- File upload form -->
                                        <!-- <div class="col-md-12" id="importFrm" style="display: none;">
                                            <form action="<?php echo base_url('CSVcodex/import'); ?>" method="post" enctype="multipart/form-data">
                                                <input type="file" name="file" />
                                                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
                                            </form>
                                        </div>

                                        <div class="col-md-12" id="exportFrm" style="display: none;">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <input type="file" name="file" />
                                                <input type="submit" class="btn btn-danger" name="exportSubmit" value="EXPORT">
                                            </form>
                                        </div> -->


                                        <!-- <div class="dropdown-divider mb-20"></div> -->

                                        <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3" >
                                            <!-- Data list table -->
                                            <!-- <table class="table table-striped table-bordered" > --><!--style="overflow-x:auto;"--->
                                                <!--id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%"--->
                                                <table id="example" class="display nowrap text-center" cellspacing="0" style="width: 100%;">
                                                <thead class="thead-dark" >
                                                    <tr>
                                                        <th >#ID</th>
                                                        <th >Name</th>
                                                        <th >Email</th>
                                                        <th >Gender</th>
                                                        <th >Position</th>
                                                        <th >Department</th>
                                                        <th >Code</th>
                                                        <th >Status</th>
                                                        <th >Date Create</th>
                                                        <th >Date Modified</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(!empty($emp_tbl)){ foreach($emp_tbl as $row){ ?><!--testing tu table database to call each role--->
                                                    <tr>
                                                        <td><?php echo $row['id_emp']; ?></td>
                                                        <td><?php echo $row['name_emp']; ?></td>
                                                        <td><?php echo $row['email_emp']; ?></td>
                                                        <td><?php echo $row['gender_emp']; ?></td>
                                                        <td><?php echo $row['position_emp']; ?></td>
                                                        <td><?php echo $row['department_emp']; ?></td>
                                                        <td><?php echo $row['code']; ?></td>
                                                        <td><?php echo $row['status_emp']; ?></td>
                                                        <td><?php echo $row['created']; ?></td>
                                                        <td><?php echo $row['modified']; ?></td>
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