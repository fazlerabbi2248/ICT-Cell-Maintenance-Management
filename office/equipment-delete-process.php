<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['delete_btn'])){

	$id = $_POST['delete_id'];
$equipment_delete = "DELETE FROM equipment WHERE EquipmentID=$id";

if (mysqli_query($conn,$equipment_delete)) {

    	    
	     	echo '<script language="javascript">';
            echo 'alert(Records deleted successfully"); location.href="equipment-delete.php"';
            echo '</script>';
             
  
} else {
	echo $id;
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);





}
?> 
