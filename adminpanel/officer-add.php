<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>

         <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Section OFFicer </h1>
                    <p class="mb-4 ">
                  

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-warning">ADD new Section Officer Member</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal text-info" action="officer-addinfo.php" method="POST" enctype="multipart/form-data">

                                        



                                              
               
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Name </h5></label>


                                               <input type="text" id="name" name="name">                                                

                                                </div>  

                                                  <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold">Image</h5></label>


                                                   <input type="file" id="image" name="image">

                                                </div> 

                                             
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Mobile No </h5></label>


                                               <input type="text" id="mobile" name="mobile">                                                

                                                </div>   
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Email </h5></label>


                                               <input type="email" id="email" name="email">                                                

                                                </div>   
                                    
                                                  <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Department </h5></label>


                                               <input type="text" id="department" name="department">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Start Date </h5></label>


                                               <input type="date" id="start_date" name="start_date">                                                

                                                 

                                                </div>  


                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Password </h5></label>


                                               <input type="password" id="pass" name="pass">                                                

                                                 

                                                </div>                                                                                                                                       
                                          
                                          <div class="modal-footer">
                                              
                                              <button type="submit" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>

<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>