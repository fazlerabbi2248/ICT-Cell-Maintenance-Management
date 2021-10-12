<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>

<?php  include("conn.php"); ?>

<?php 
if(isset($_POST['mail_btn'])){

   	$id = $_POST['mail_id'];
   $office= "select * from officer where officer_id=$id"; 
    $Q=mysqli_query($conn,$office);
    $data = mysqli_fetch_assoc($Q);

      


mysqli_close($conn);





}
?> 

   <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> Send Email  </h1>
                    <p class="mb-4">
                   

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['officer_name'] ?> </h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="sending-info.php">

                                       	


                                        
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">TO </h5></label>


                                               <input type="email"  value="<?php echo $data['officer_email']; ?>"  name="email" readonly>                                                

                                                </div>  

                                              
                                               

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Subject</h5></label>


                                               <input type="text"   name="sub">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Message</h5></label>

                                         <textarea type="text" name="msg"  rows="4" cols="50" > </textarea>                                                

                                                </div> 
                                               
                                            
                                          
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['officer_id']; ?>">
                                              <button type="submit" id="send-btn" name="send_btn" class="btn btn-primary">send</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>
