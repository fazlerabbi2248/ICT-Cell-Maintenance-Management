<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment </h1>
                    <p class="mb-4">
                    	Here we are showing our Equipment Details.

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Equipmnets Details</h6>
                        </div>
                        <div class="card-body">
                           <div class="card-header py-3">
                           <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ..">
                        </div>
                            <div class="table-responsive">

                         <div>      </div>
                                <table class="table table-bordered table-striped table-light" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                           
                                            <th>Label</th>
                                            <th>Equipment Type</th>
                                            <th>Included Date</th>
                                            <th>Expiry Date</th>
                                            <th>Department</th>

                                        </tr>
                                    </thead>
                                    <tfoot class="tfoot-dark">
                                        <tr>
                                            
                                            <th>Label</th>
                                            <th>Equipment Type</th>
                                            <th>Included Date</th>
                                            <th>Expiry Date</th>
                                            <th>Department</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="myTable">
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from equipment"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr>
                                                     
                                                      <td><?= $data['Label']; ?></td>
                                                      <td><?= $data['Equipment_Type']; ?></td>
                                                      <td><?= $data['included_date']; ?></td>
                                                      <td><?= $data['expire_date']; ?></td>
                                                      <td><?= $data['Department']; ?></td>
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
 <script>
function myFunction() {
  // Declare variables
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
}

</script>


<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>