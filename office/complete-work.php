<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment  </h1>
                    <p class="mb-4">
                      Heere we are showing which equipemt that are recover from problem

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
                            <h6 class="m-0 font-weight-bold text-primary"> Completed Work</h6>
                        </div>
                        <div class="card-body">

                                                          <table class="table table-bordered table-striped table-light" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Label </th>
                                            <th>Equipment Type</th>
                                            <th>Department</th>
                                            <th>problem Description</th>
                                            <th>issue Date</th>
                                           <th>Repaier Name</th>


                                        </tr>
                                    </thead>
                                    <tfoot class="bg-dark">
                                        <tr class="text-light">
                                            <th>Label </th>
                                            <th>Equipment Type</th>
                                            <th>Department</th>
                                            <th>problem Description</th>
                                            <th>issue Date</th>
                                            <th>Repaier Name</th>
                                          
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

                                                       
                                                     $sql= "select * from equipment e,equipmmentproblem p ,completework c where  e.EquipmentID=p.EquipmentID and c.EquipmentID=p.EquipmentID and Department='$de'"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr class="text-dark">
                                                      <td><?php echo $data['Label'];?></td>
                                                       <td><?php echo $data['Equipment_Type'];?></td>
                                                      <td><?php echo $data['Department']?></td>
                                                      <td><?= $data['prob_desc']; ?></td>
                                                      <td><?= $data['issue_date']; ?></td>
                                                     <td><?= $data['repair_name']; ?></td>
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>


                     </div>
                     </div>
                     </div>




<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>