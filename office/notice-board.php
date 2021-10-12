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
                                            <th>Notice Description</th>
                                            <th>Notice Date</th>


                                        </tr>
                                    </thead>
                                    <tfoot class="bg-dark">
                                        <tr>
                                            <th>Notice Name </th>
                                            <th>Notice Description</th>
                                            <th>Notice Date</th>
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
                                                       
                                                      $sql= "select * from notice where notice_department='$de'"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr>
                                                      <td><?php echo $data['notice_name'];?></td>
                                                      <td><?= $data['notice_desc']; ?></td>
                                                      <td><?= $data['notice_date']; ?></td>

                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>


                     </div>
                     </div>
                     </div>




<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>