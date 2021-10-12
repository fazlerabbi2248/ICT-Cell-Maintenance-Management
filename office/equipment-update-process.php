<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php include('conn.php');  ?>
<?php 

if(isset($_POST['update_btn'])){
	$id = $_POST['update_id'];


  

       $sql= "select * from equipment where EquipmentID=$id"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment </h1>
                    <p class="mb-4">
                 

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Equipment Details</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="equipment-update-information.php" enctype="multipart/form-data">

                                        
                                             
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Label </h5></label>


                                               <input type="text" id="label" name="label" value="<?php echo $data['Label']?>" >                                                

                                                </div>

                                                  <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Equipment Type</h5></label>


                                                   <input type="text" name="equipment_type" value="<?php echo $data['Equipment_Type']?>"   >

                                                </div>                                                                                            
  
                                          
                                        

                                                
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Included Date </h5></label>


                                               <input type="date" id="start_date" name="included_date" value="<?php echo $data['included_date']?>" >                                                

                                                 

                                                </div> 

                                            <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Expired date </h5></label>


                                               <input type="date" id="start_date" name="expired_date" value="<?php echo $data['expire_date']?>" >                                                

                                                 

                                                </div>       
                                                     <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Department</h5></label>


                                               <input type="text"  name="department" value="<?php echo $data['Department']?>" readonly>                                                

                                                 

                                                </div>        
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['EquipmentID']; ?>">
                                              <button type="submit" id="save-btn" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>