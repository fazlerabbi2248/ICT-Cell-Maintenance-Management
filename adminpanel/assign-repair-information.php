<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

	


   $id = $_POST['id'];

          $EquipmentID = filter_input(INPUT_POST, 'EquipmentID');
      
       $repair_name = filter_input(INPUT_POST, 'repair_name');
      
     

     $assign = "INSERT INTO onprocess (prob_id,EquipmentID, repair_name) VALUES ('$id','$EquipmentID','$repair_name')";


       if(mysqli_query($conn, $assign)){

        $equipment_delete = "DELETE FROM pendingproblem WHERE EquipmentID='$EquipmentID'";

        mysqli_query($conn, $equipment_delete);
       
        echo '<script language="javascript">';
            echo 'alert("Successfully assign Repaier "); location.href="assign-repair.php"';
            echo '</script>';
             
      } else{
            echo "ERROR: Could not able to execute $assign. " . mysqli_error($conn);
         }
mysqli_close($conn);





}
?> 
