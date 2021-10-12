<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php include('conn.php');  ?>
<?php 

if(isset($_POST['update_btn'])){
	$id = $_POST['update_id'];


  

       $sql= "select * from authority where autho_id=$id"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Authority </h1>
                    <p class="mb-4">
                 

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Authority Details</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="authority-update-information.php" enctype="multipart/form-data">

                                        
                                             
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Name </h5></label>


                                               <input type="text" id="autho-name" name="autho-name" value="<?php echo $data['autho_name']?>" >                                                

                                                </div>

                                                  <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Image</h5></label>


                                                   <input type="file" id="image" name="image" value="upload/<?php echo $data['autho_img']?>"   >

                                                </div>                                                                                            

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Mobile No </h5></label>


                                               <input type="text" id="mobile" name="mobile" value="<?php echo $data['autho_mobile']?>" >                                                

                                                </div>   
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Email </h5></label>


                                               <input type="text" id="email" name="email" value="<?php echo $data['autho_email']?>" >                                                

                                                </div>   
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Position</h5></label>


                                               <input type="text" id="position" name="position" value="<?php echo $data['autho_position']?>" >                                                

                                                </div>   

                                                 <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">office Adress</h5></label>


                                               <input type="text" id="office" name="office" value="<?php echo $data['autho_office']?>" required>                                                

                                                </div>   
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Start Date </h5></label>


                                               <input type="date" id="start_date" name="start_date" value="<?php echo $data['autho_startdate']?>" >                                                

                                                 

                                                </div> 
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['autho_id']; ?>">
                                              <button type="submit" id="save-btn" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>