<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>




  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment </h1>
                    <p class="mb-4">
                    	Here we are going to remove any Equipment Information
                    </p>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Equipment Delete</h6>
                        </div>


                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Label</th>
                                            <th>Equipment Type</th>
                                            <th>Included Date</th>
                                            <th>Expiry Date</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          
                                            <th>Label</th>
                                            <th>Equipment Type</th>
                                            <th>Included Date</th>
                                            <th>Expiry Date</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         <?php  include("conn.php"); ?>


                                                  <?php
                                                          $id=  $_SESSION['username'];
                                                         $depart = "select * from officer where officer_email='$id'";

                                                          $Q1=mysqli_query($conn,$depart);
                                                           $data1 = mysqli_fetch_assoc($Q1);
                                                           $de=$data1['officer_department'];
                                                       
                                                      $sql= "select * from equipment where Department='$de'"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr>
                                                     
                                                      <td><?= $data['Label']; ?></td>
                                                      <td><?= $data['Equipment_Type']; ?></td>
                                                      <td><?= $data['included_date']; ?></td>
                                                      <td><?= $data['expire_date']; ?></td>
                                                      <td><?= $data['Department']; ?></td>
                                                        <td>
                                                            <form action="equipment-delete-process.php" method="post">
                                                              <input type="hidden" name="delete_id" value="<?php echo $data['EquipmentID']; ?>">
                                                              <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                                            </form>
                                                        </td>
                                                                                                  

                                                    </tr>
                                                    <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



  </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>