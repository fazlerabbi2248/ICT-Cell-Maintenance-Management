<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['delete_btn'])){

	$id = $_POST['delete_id'];
$delete_member= "DELETE FROM authority WHERE autho_id=$id";

if (mysqli_query($conn,$delete_member)) {

    	    
	     	echo '<script language="javascript">';
            echo 'alert("Successfully delete"); location.href="autho-delete.php"';
            echo '</script>';
             
  
} else {
	echo $id;
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);





}
?> 
