<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 ">Section Officer </h1>
                    <p class="mb-4 ">
                        Authority Who control our university 

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-primary">Section Officer</h6>
                        </div>
                        <div class="card-body">

                                <div class="row" >
      <?php  include("conn.php"); ?>
       <?php
 
                                                       
      $sql= "select * from officer"; 
    $Q=mysqli_query($conn,$sql);
     while($data=mysqli_fetch_assoc($Q)){
     ?>
      <div class="col-lg-6 col-md-6 col-12">
       
      

        <div class="card">
          
             <div class="card-body">
                <img  class="rounded mx-auto d-block" src="upload/<?php echo $data['officer_img'];?>" alt="rounded-circle" style="width:50%" style="height: :50%">
             <h4 class="card-title text-info"><?php echo $data['officer_name']?></h4>
             <p class="card-text"><?php echo $data['officer_department']?> </p>
            <form action="officer-full-details.php" method="post">
            <input type="hidden" name="details_id" value="<?php echo $data['officer_id']; ?>">
            <button type="submit" name="details_btn" class="btn  btn-success"> See More Details</button>
            </form>
             </div>
        </div>
      </div>
     <?php } ?>

    

        

   

        

      </div>
    </div>


                        </div>
                        </div>
                        </div>




<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>