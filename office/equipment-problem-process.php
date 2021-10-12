<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php include('conn.php');  ?>
<?php 

if(isset($_POST['problem_btn'])){
	$id = $_POST['problem_id'];


  

       $sql= "select * from equipment where EquipmentID=$id"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipments problem </h1>
                    <p class="mb-4">
                   here we are going send equipments problems data

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sending Data For Equipment problem</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="equipment-problem-information.php">

                                        
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Label</h5></label>


                                               <input type="text"  value="<?php echo $data['Label']; ?>"  name="label">                                                

                                                </div>  

                                              
                                               

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Equipment Type</h5></label>


                                               <input type="text"  value="<?php echo $data['Equipment_Type']; ?>"  name="Equipment_Type">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Problem Description</h5></label>

                                         <textarea type="text" name="problem-desc"  rows="4" cols="50" ></textarea>                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Issue date</h5></label>


                                               <input type="date" id="date" name="issue-date">                                                

                                                </div> 
                                            
                                          
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['EquipmentID']; ?>">
                                              <button type="submit" id="send-btn" name="send_btn" class="btn btn-primary">Send</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>