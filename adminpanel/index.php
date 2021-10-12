<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>




 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
        <div class="card">
          
             <div class="card-body bg-info">

                <?php
                 include("conn.php"); 

                 
                $total_notice= "select * from notice";
                if ($result = mysqli_query($conn, $total_notice)) {

    // Return the number of rows in result set
             $rowcount = mysqli_num_rows( $result );
    }
    // Display result
             

                ?>
               <i class="fas fa-bell fa-3x"></i>
             <h4 class="card-title text-dark">Notice</h4>

             <p class="card-text text-light">Total Notcice: <?php echo $rowcount ?></p>
            <form action="notice-details.php" method="post">
            <input type="hidden" name="details_id" value="<?php echo $data['autho_id']; ?>">
            <button type="submit" name="details_btn" class="btn  btn-success"> See More Details</button>
            </form>
             </div>
        </div>


              <div class="card">
          
             <div class="card-body bg-info">

                <?php
                 include("conn.php"); 
                $total_notice= "select * from equipment";
                if ($result = mysqli_query($conn, $total_notice)) {

    // Return the number of rows in result set
             $rowcount = mysqli_num_rows( $result );
    }
    // Display result
             

                ?>
            <i class="fas fa-tools  fa-3x"></i>
             <h4 class="card-title text-dark">Equipmnet</h4>

             <p class="card-text text-light">Total Equipment: <?php echo $rowcount ?></p>
            <form action="equipment-details.php" method="post">
            <input type="hidden" name="details_id" value="<?php echo $data['autho_id']; ?>">
            <button type="submit" name="details_btn" class="btn  btn-success"> See More Details</button>
            </form>
             </div>
        </div>
              <div class="card">
          
             <div class="card-body bg-info">

                <?php
                 include("conn.php"); 
                $total_notice= "select * from officer";
                if ($result = mysqli_query($conn, $total_notice)) {

    // Return the number of rows in result set
             $rowcount = mysqli_num_rows( $result );
    }
    // Display result
             

                ?>
               <i class="fas fa-male fa-3x"></i>
             <h4 class="card-title text-dark">Section Officer</h4>

             <p class="card-text text-light">Total Section Officer: <?php echo $rowcount ?></p>
            <form action="officer-details.php" method="post">
            <input type="hidden" name="details_id">
            <button type="submit" name="details_btn" class="btn  btn-success"> See More Details</button>
            </form>
             </div>
        </div>

              <div class="card">
          
             <div class="card-body bg-info">

                <?php
                 include("conn.php"); 
                $total_notice= "select * from Authority";
                if ($result = mysqli_query($conn, $total_notice)) {

    // Return the number of rows in result set
             $rowcount = mysqli_num_rows( $result );
    }
    // Display result
             

                ?>
            <i class="fas fa-tools  fa-3x"></i>
             <h4 class="card-title text-dark">Authority</h4>

             <p class="card-text text-light">Total Authority: <?php echo $rowcount ?></p>
            <form action="authority-details.php" method="post">
            <input type="hidden" name="details_id" value="<?php echo $data['autho_id']; ?>">
            <button type="submit" name="details_btn" class="btn  btn-success"> See More Details</button>
            </form>
             </div>
        </div>
      </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

    

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                     
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          
        <!-- End of Content Wrapper -->

   
<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>
 

   

