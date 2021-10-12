<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['complete_btn'])){

	


   $id = $_POST['prob_id'];

    $sql = "Select * from onprocess where prob_id='$id'";

    $Q=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($Q);

      $EquipmentID=$data['EquipmentID'];
      $repair_name= $data['repair_name'];
     

     $assign = "INSERT INTO completework (EquipmentID, prob_id,repair_name) VALUES ('$EquipmentID','$id','$repair_name')";


       if(mysqli_query($conn, $assign)){

        $equipment_delete = "DELETE FROM onprocess WHERE prob_id='$id'";

        mysqli_query($conn, $equipment_delete);
       
        echo '<script language="javascript">';
            echo 'alert("Successfully the work is completed "); location.href="on-processing-work.php"';
            echo '</script>';
             
      } else{
            echo "ERROR: Could not able to execute $assign. " . mysqli_error($conn);
         }
mysqli_close($conn);





}
?> 
