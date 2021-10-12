<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php include('conn.php');  ?>
<?php 

if(isset($_POST['update_btn'])){
	$id = $_POST['update_id'];


  

       $sql= "select * from notice where notice_id=$id"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Shedule </h1>
                    <p class="mb-4">
                   here we are going to update Shedule

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Shedule</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="notice-update-information.php">

                                        
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Notice Name</h5></label>


                                               <input type="text"  value="<?php echo $data['notice_name']; ?>"  name="name">                                                

                                                </div>  

                                              
                                               

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Department</h5></label>


                                               <input type="text"  value="<?php echo $data['notice_department']; ?>"  name="department">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Notice Description</h5></label>

                                         <textarea type="text" name="notice-des" value="<?php echo $data['notice_desc']; ?>" rows="4" cols="50" > <?php echo $data['notice_desc']; ?></textarea>                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">date</h5></label>


                                               <input type="date" value="<?php echo $data['notice_date']; ?>" id="date" name="notice_date">                                                

                                                </div> 
                                            
                                          
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['notice_id']; ?>">
                                              <button type="submit" id="save-btn" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>