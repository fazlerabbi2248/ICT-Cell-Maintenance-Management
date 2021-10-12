<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>


<?php 
  $id=  $_SESSION['username'];
                  $depart = "select * from officer where officer_email='$id'";

                      $Q1=mysqli_query($conn,$depart);
                      $data = mysqli_fetch_assoc($Q1);

?>



 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $data['officer_name'] ?></h1>
                    <p class="mb-4">
                    	Here we are showing  <?php echo $data['officer_name']?>'s data.

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-primary Bg-dark"> Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="card text-center text-primary">
   <img  class="rounded mx-auto d-block" src="upload/<?php echo $data['officer_img'];?>" alt="rounded-circle" style="width:50%" style="height: :50%">
 <br>
  <h1 class="text-dark"><?php echo $data['officer_name'] ?></h1>
  <p><?php echo $data['officer_department'] ?></p>
  <p><?php echo $data['officer_mobile'] ?></p>
  <p><?php echo $data['officer_email'] ?></p>
  <p><?php echo $data['office_startdate'] ?></p>
  


 
</div>


                       </div>
                       </div>
                       </div>

<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>