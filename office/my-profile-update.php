<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php include('conn.php');  ?>
<?php 

  $id=  $_SESSION['username'];
                  $depart = "select * from officer where officer_email='$id'";

                      $Q1=mysqli_query($conn,$depart);
                      $data = mysqli_fetch_assoc($Q1);



?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $data['officer_name'] ?> </h1>
                    <p class="mb-4">
                 

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update <?php echo $data['officer_name'] ?> Details</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="my-update-information.php" enctype="multipart/form-data">

                                        
                                             
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Name </h5></label>


                                               <input type="text" id="autho-name" name="officer-name" value="<?php echo $data['officer_name']?>" >                                                

                                                </div>

                                                  <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Image</h5></label>


                                                   <input type="file" id="image" name="image" value="upload/<?php echo $data['officer_img']?>"   >

                                                </div>                                                                                            

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Mobile No </h5></label>


                                               <input type="text" id="mobile" name="mobile" value="<?php echo $data['officer_mobile']?>" >                                                

                                                </div>   
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Email </h5></label>


                                               <input type="text" id="email" name="email" value="<?php echo $data['officer_email']?>" readonly>                                                

                                                </div>   
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Department</h5></label>


                                               <input type="text" id="position" name="department" value="<?php echo $data['officer_department']?>" readonly >                                                

                                                </div>   
  
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Start Date </h5></label>


                                               <input type="date" id="start_date" name="start_date" value="<?php echo $data['office_startdate']?>" >                                                

                                                 

                                                </div> 
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['officer_id']; ?>">
                                              <button type="submit" id="save-btn" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>