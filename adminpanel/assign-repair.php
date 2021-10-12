<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment Problem </h1>
                    <p class="mb-4">
                     

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
                            <h6 class="m-0 font-weight-bold text-primary">Assign REpaier</h6>
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
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tfoot class="bg-dark">
                                        <tr class="text-light">
                                            <th>Label </th>
                                            <th>Equipment Type</th>
                                            <th>Department</th>
                                            <th>problem Description</th>
                                            <th>issue Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from equipment as e,pendingproblem as p where e.EquipmentID=p.EquipmentID"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr class="text-dark">
                                                      <td><?php echo $data['Label'];?></td>
                                                       <td><?php echo $data['Equipment_Type'];?></td>
                                                      <td><?php echo $data['Department']?></td>
                                                      <td><?= $data['prob_desc']; ?></td>
                                                      <td><?= $data['issue_date']; ?></td>
                                                                                                              <td>
                                                            <form action="assign-repair-process.php" method="post">
                                                              <input type="hidden" name="assign_id" value="<?php echo $data['prob_id']; ?>">
                                                              <button type="submit" name="assign_btn" class="btn btn-light"><i class="fas fa-user-plus"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>


                     </div>
                     </div>
                     </div>




<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>