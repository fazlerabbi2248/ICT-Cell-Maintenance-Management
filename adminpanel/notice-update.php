<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Notice Board </h1>
                    <p class="mb-4">
                      Here we are showing Notice From Admin Panel

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
                            <h6 class="m-0 font-weight-bold text-primary">Notice Board</h6>
                        </div>
                        <div class="card-body">

                                                          <table class="table table-bordered table-striped table-light" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Notice Name </th>
                                            <th>Department</th>
                                            <th>Notice Description</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tfoot class="bg-dark">
                                        <tr class="text-light">
                                            <th>Notice Name </th>
                                            <th>Department</th>
                                            <th>Notice Description</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from notice"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr class="text-dark">
                                                      <td><?php echo $data['notice_name'];?></td>
                                                      <td><?php echo $data['notice_department']?></td>
                                                      <td><?= $data['notice_desc']; ?></td>
                                                      <td><?= $data['notice_date']; ?></td>

                                                                                                              <td>
                                                            <form action="notice-update-process.php" method="post">
                                                              <input type="hidden" name="update_id" value="<?php echo $data['notice_id']; ?>">
                                                              <button type="submit" name="update_btn" class="btn btn-info">                     <i class="fas fa-fw fa-refresh-alt"></i>Update</button>
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