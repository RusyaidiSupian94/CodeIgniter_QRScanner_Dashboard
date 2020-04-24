<div class="page-wrapper" id="page-wrapper"><!---need to close at the end--->
<aside id="page-aside" class=" page-aside aside-fixed">
                <div class="sidenav darkNav">
                    <a href="#" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
                        <!-- <i class="icon-Paper-Plane inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center"></i> -->
                        <img src="<?php echo base_url()?>assets/images/byond.png" class=" img-fluid d-inline-flex align-items-center justify-content-center">
                        <!-- <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>Nak Daftar</span></span> -->
                    </a>
                    <div class="flex">
                        <div class="aside-content slim-scroll">
                            <ul class="metisMenu" id="metisMenu">
                                <li> <i class="fas fa-list nav-thumbnail"></i>
                                    <a href="<?php echo site_url('/Home') ?>"><!---class="has-arrow"--->

                                        <span class="nav-text">
                                            Dashboard 
                                        </span>
                                    </a>
                                </li><!--Menu-item-->
                                
                               
                                <li> <i class="fas fa-database nav-thumbnail"></i>
                                    <a href="<?php echo site_url('menudata'); ?>">

                                        <span class="nav-text">
                                            Database
                                        </span>
                                    </a>
                                    
                                </li><!--Menu-item-->
                                <!-- <li> <i class="fas fa-user-plus nav-thumbnail"></i>
                                    <a href="<?php echo site_url('updateda/add/'); ?>">
                                        <span class="nav-text">
                                            Register Customer
                                        </span>
                                    </a>
                                    
                                </li> --><!--Menu-item-->
                                <li> <i class="fas fa-chart-line nav-thumbnail"></i>
                                    <a href="<?php echo site_url('statis'); ?>">
                                        <span class="nav-text">
                                            Statistik
                                        </span>
                                    </a>
                                    
                                </li><!--Menu-item-->
                                <li>
                                    <i class="fas fa-user-plus nav-thumbnail"></i>
                                    <a  class="has-arrow" href="javascript:void(0)">

                                        <span class="nav-text">
                                            Employee
                                        </span>
                                    </a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <span class="nav-thumbnail"></span>
                                            <a href="<?php echo base_url('/authv2/register') ?>">Register Employee</a>
                                        </li>
                                        <li>
                                            <span class="nav-thumbnail"></span>
                                            <a href="<?php echo base_url('/authv2/emp_table') ?>">Employee Table</a>
                                        </li>
                                    </ul>
                                </li><!--Menu-item-->
                            </ul>
                        </div><!-- aside content end-->
                    </div><!-- aside hidden scroll end-->
                    <div class="aside-footer p-2 pl-25">
                        <div class="">
                            nakdaftar - v2.5
                        </div>
                    </div><!-- aside footer end-->
                </div><!-- sidenav end-->
            </aside><!-- page-aside end-->