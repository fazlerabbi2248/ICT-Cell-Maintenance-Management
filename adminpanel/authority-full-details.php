<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



<?php  include("conn.php"); ?>

<?php 
if(isset($_POST['details_btn'])){

	$id = $_POST['details_id'];
   $sql= "select * from authority where autho_id=$id"; 
    $Q=mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($Q);

      


mysqli_close($conn);





}
?> 
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $data['autho_name'] ?></h1>
                    <p class="mb-4">
                    	Here we are showing  <?php echo $data['autho_name']?>'s data.

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-primary Bg-dark"> Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="card text-center text-primary">
                               <img  class="rounded mx-auto d-block" src="upload/<?php echo $data['autho_img'];?>" alt="rounded-circle" style="width:50%">

 <br>
  <h1 class="text-dark"><?php echo $data['autho_name'] ?></h1>
  <p><?php echo $data['autho_position'] ?></p>
  <p><?php echo $data['autho_mobile'] ?></p>
  <p><?php echo $data['autho_email'] ?></p>
  <p><?php echo $data['autho_office'] ?></p>
 
 
</div>


                       </div>
                       </div>
                       </div>


               



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>