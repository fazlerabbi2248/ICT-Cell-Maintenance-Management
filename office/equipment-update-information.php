<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

      $id = $_POST['id'];


		 $name = filter_input(INPUT_POST, 'autho-name');
		
	
       $label = filter_input(INPUT_POST, 'label');
       $equipment_type = filter_input(INPUT_POST, 'equipment_type');
       $included_date = filter_input(INPUT_POST, 'included_date');
       $expiry_date = filter_input(INPUT_POST, 'expired_date');
       $department = filter_input(INPUT_POST, 'department');

 
   $sql = "UPDATE  equipment SET EquipmentID='$id',Label='$label',Equipment_Type='$equipment_type',included_date='$included_date',expire_date='$expiry_date',Department='$department' WHERE EquipmentID=$id";

    	
	    
	       if (mysqli_query($conn, $sql))  {
              echo '<script language="javascript">';
        
            echo 'alert("Successfully saved"); location.href="equipment-update.php"';
            echo '</script>';
             

        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }

	
				 
// Close connection
mysqli_close($conn);








}
?>
