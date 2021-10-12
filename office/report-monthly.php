<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment </h1>
                    <p class="mb-4">
                    	Here we are going showing monthy report : 
                    </p>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Generate Report monthly </h6>
                        </div>


                        
                        <div class="card-body">
                                       <form class="form-horizontal" action="equipment-addinfo.php" method="POST">

                                        

                                              <div class="form-group">
                                                  <label class="control-label col-sm-2"> <h5 class="font-weight-bold">Label :</h5> </label>
                                                <input type="text" name="label" class="form-control" placeholder="Enter Label Name">
                                              </div>


                                              
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Equipment type :</h5></label>
                                                 <select name="equipment_type" class="form-select" aria-label="Default select  example">
                                                      <option selected disabled>Selecte type</option>
                                                      <option value="Desktop Computer">Desktop Computer</option>
                                                      <option value="Monitor">Monitor</option>
                                                      <option value="Laptop Computer">Laptop Computer</option>
                                                      <option value="Printer">Printer</option>
                                                      <option value="UPS">UPS</option>
                                                      <option value="Projector">Projector</option>
                                                      <option value="Photocopier">Photocopier</option>
                                                      <option value="Network Switch">Network Switch</option>
                                                      <option value="Network Router">Network Router</option>
                                                      <option value="Wireless Router">Wireless Router</option>
                                                      <option value="Scanner">Scanner</option>
                                                      <option value="CC Camera and DVR">CC Camera and DVR</option>
                                                      <option value="Portable Hard Drive">Portable Hard Drive</option>
                                                      <option value="Server Computer">Server Computer</option>
                                                      <option value="Internet Modem">Internet Modem</option>
                                                      <option value="Special Software">Special Software</option>
                                                      <option value="Presenter">Presenter</option>
                                                      <option value="Computer related lab equipments">TComputer related lab equipments</option>
                                                      <option value="Computer Lab">Computer Lab</option>
                                                      <option value="others">others</option>

                                                    </select>                                                  

                                                </div>

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Included Date :</h5></label>


                                               <input type="date" id="included-date" name="include_date">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Expiry Date :</h5></label>


                                              <input type="date" id="expiry-date" name="expiry_date">                                                

                                                </div> 


                                            

                                          
                                          
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>



                        </div>
                    </div>
                </div>





<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>