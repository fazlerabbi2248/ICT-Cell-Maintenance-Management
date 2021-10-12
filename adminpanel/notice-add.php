<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



         <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Notice Board </h1>
                    <p class="mb-4 ">
                      Notice send to Section Officer
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-warning">ADD New Notice</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal text-info" action="notice-addinfo.php" method="POST">

                                        



                                              
               
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold"> Notice Name </h5></label>


                                               <input type="text" id="name" name="name">                                                

                                                </div>                                                
  

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4 text-info"><h5 class="font-weight-bold"> Department name </h5></label>


                                               <input type="text" id="department" name="department">                                                

                                                </div> 

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"> <h5 class="font-weight-bold"><h5 class="font-weight-bold">Notice Description </h5></label>


                                               <textarea type="text" name="notice-des" rows="4" cols="50" ></textarea>                                                

                                                </div>   
                                                  
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Notice Date </h5></label>


                                               <input type="date" id="notice_date" name="notice_date">                                                

                                                 

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