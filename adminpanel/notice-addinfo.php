<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

		 $name = filter_input(INPUT_POST, 'name');
		  $department= filter_input(INPUT_POST, 'department');
	     $desc = filter_input(INPUT_POST, 'notice-des');
	    
	     $notice_date = filter_input(INPUT_POST, 'notice_date');



	     $notice = "INSERT INTO notice (notice_name, notice_desc, notice_department,notice_date) VALUES ('$name', '$desc', '$department','$notice_date')";


	     if(mysqli_query($conn, $notice)){

	     	echo '<script language="javascript">';
            echo 'alert("Successfully noticed added"); location.href="notice-add.php"';
            echo '</script>';
             
			} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		     }
				 
// Close connection
mysqli_close($conn);








}
?>
