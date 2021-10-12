<?php  include("conn.php"); ?>

<?php 


         

	     $label = filter_input(INPUT_POST, 'label');
	     $equipment_type = filter_input(INPUT_POST, 'equipment_type');
	     $included_date = filter_input(INPUT_POST, 'include_date');
	     $expiry_date = filter_input(INPUT_POST, 'expiry_date');
	     $department = filter_input(INPUT_POST, 'department');


	     $euipmentEnter = "INSERT INTO equipment (label, equipment_type, included_date,expire_date,department) VALUES ('$label', '$equipment_type', '$included_date','$expiry_date','$department')";


	     if(mysqli_query($conn, $euipmentEnter)){
	     
	     	echo '<script language="javascript">';
            echo 'alert("Successfully added"); location.href="equipment-add.php"';
            echo '</script>';
             
			} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		     }
				 
// Close connection
mysqli_close($conn);






?> 