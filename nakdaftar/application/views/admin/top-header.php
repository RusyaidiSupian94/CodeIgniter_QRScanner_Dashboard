<header class="navbar page-header whiteHeader navbar-expand-lg">
                    <ul class="nav flex-row mr-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link sidenav-btn h-lg-down">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                            <a class="nav-link sidenav-btn h-lg-up" href="#page-aside" data-toggle="dropdown" data-target="#page-aside">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav flex-row order-lg-2 ml-auto nav-icons">                  
                        <li class="nav-item dropdown user-dropdown align-items-center">
                            <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown">
                                <span class="user-states states-online">
                                    <img src="<?php echo base_url()?>assets/images/favicon.jpg" width="35" alt="" class=" img-fluid rounded-circle">
                                </span>
                                <span class="ml-2 h-lg-down dropdown-toggle">
                                    Hi, <?php echo $userdata['name']; ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                <div class="text-center p-3 pt-0 b-b mb-5">
                                    <span class="mb-0 d-block font300 text-title fs-1x">Hi! <span class="font700"><?php echo $userdata['name']; ?></span></span>
                                    <span class="fs12 mb-0 text-muted"><?php echo $userdata['role']; ?></span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="icon-User"></i>My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="icon-Gear"></i> Settings<span class="badge badge-text text-danger-active bg-danger-light ml-2">Update</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url()?>login/logout"><i class="icon-Power"></i> logout</a>

                            </div>
                        </li>
                        <li class="h-lg-up nav-item">
                            <a href="#" class=" nav-link collapsed" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false">
                                <i class="icon-Magnifi-Glass2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse search-collapse" id="navbarToggler">
                        <form class="form-inline ml-1">     
                            <button class="no-padding bg-trans border0" type="button"><i class="icon-Magnifi-Glass2"></i></button>
                            <input class="form-control border0" type="search" placeholder="Search..." aria-label="Search">
                        </form>
                    </div>
                </header>