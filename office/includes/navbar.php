        <!-- Sidebar -->
        <ul class="navbar-nav bg-success text-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">ICT CELL CENTER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active bg-dark">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading bg-dark ">
                Management
            </div>



            <!-- Nav Item - Utilities Collapse Menu -->
       

            <li class="nav-item ">
                <a class="nav-link collapsed text-dark font-weight-bold" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Equipment</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded text-info">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item text-white" href="equipment-add.php">Add new Equipment</a>
                        <a class="collapse-item text-white" href="equipment-delete.php">Delete Equipment</a>
                        <a class="collapse-item text-white" href="equipment-details.php">view equipment Details</a>
                        <a class="collapse-item text-white" href="equipment-update.php">Update Equipment Info</a>
                        <a class="collapse-item text-white" href="equipment_expired.php">Expired Equipment</a>
                        
                    </div>
                </div>
            </li> 



            <li class="nav-item ">
                <a class="nav-link" href="Authority-details.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Authority</span></a>
            </li>  

            <li class="nav-item ">
                <a class="nav-link" href="officerdetails.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Section Officer</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="report.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Report</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="notice-board.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Notice Board</span></a>
            </li>



        

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading bg-dark">
                Maintenance Equipment
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Maintenance</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                       
                    <a class="collapse-item text-white" href="sending-problem.php">Sending Problem info</a>
                        <a class="collapse-item text-white" href="pending-equipment.php">Pending</a>
                        <a class="collapse-item text-white" href="complete-work.php">Completed</a>
                       
                </div>
            </li>

            <!-- Nav Item - Charts -->
        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
 
        </ul>
        <!-- End of Sidebar -->


         <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


           <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
           
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
     

                        <!-- Nav Item - Alerts -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="myprofile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="my-profile-update.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                       <i class="fas fa-fw fa-sign-out-alt"></i>
                   <form action="logout.php" method="POST"> 
               <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
               </form>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

           <!-- Logout Modal-->
  