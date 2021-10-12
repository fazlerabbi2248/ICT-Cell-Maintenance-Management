<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php include('conn.php');  ?>
<?php 

if(isset($_POST['assign_btn'])){
	$id = $_POST['assign_id'];


  

      $sql= "select * from equipment as e,pendingproblem as p where e.EquipmentID=p.EquipmentID"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment Problem </h1>
                    <p class="mb-4">
                   

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Assign Repaier</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="assign-repair-information.php">

                                        
                                             <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Equipment ID</h5></label>


                                               <input type="text"  value="<?php echo $data['EquipmentID']; ?>"  name="EquipmentID"  readonly>                                                

                                                </div> 

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Label Name</h5></label>


                                               <input type="text"  value="<?php echo $data['Label']; ?>"  name="label"  readonly>                                                

                                                </div>  

                                              
                                               

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Equipment_type</h5></label>


                                               <input type="text"  value="<?php echo $data['Equipment_Type']; ?>"  name="Equipment_Type"  readonly>                                                

                                                </div>  

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Department</h5></label>


                                               <input type="text"  value="<?php echo $data['Department']; ?>"  name="Department" readonly>                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Problem Description</h5></label>

                                         <textarea type="text" name="prob-des" rows="4" cols="50"  readonly> <?php echo $data['prob_desc']; ?></textarea>                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Issue date</h5></label>


                                               <input type="date" value="<?php echo $data['issue_date']; ?>" id="date" name="notice_date"  readonly>                                                

                                                </div> 

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Repaier name</h5></label>


                                               <input type="text" id="date" name="repair_name">                                                

                                                </div> 
                                            
                                          
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['prob_id']; ?>">
                                              <button type="submit" id="save-btn" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>