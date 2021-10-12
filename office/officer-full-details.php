<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



<?php  include("conn.php"); ?>

<?php 
if(isset($_POST['details_btn'])){

   	$id = $_POST['details_id'];
   $sql= "select * from officer where officer_id=$id"; 
    $Q=mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($Q);

      


mysqli_close($conn);





}
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
   <img  class="rounded mx-auto d-block" src="adminpanel/upload/<?php echo $data['officer_img'];?>" alt="rounded-circle" style="width:50%" style="height: :50%">
 <br>
  <h1 class="text-dark"><?php echo $data['officer_name'] ?></h1>
  <p><?php echo $data['officer_department'] ?></p>
  <p><?php echo $data['officer_mobile'] ?></p>
  <p><?php echo $data['officer_email'] ?></p>
  <p><?php echo $data['office_startdate'] ?></p>
  
 <form action="send-mail.php" method="POST"> 
               <input type="hidden" name="mail_id" value="<?php echo $data['officer_id']; ?>">
            <p><button type="submit" name="mail_btn">Mail to <?php echo $data['officer_name'] ?></button></p>
               </form>

 
</div>


                       </div>
                       </div>
                       </div>


               



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>